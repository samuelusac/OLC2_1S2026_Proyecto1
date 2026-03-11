<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    echo json_encode([
        "error" => "PHP ERROR",
        "message" => $errstr,
        "file" => $errfile,
        "line" => $errline
    ]);
    exit;
});

set_exception_handler(function ($e) {
    echo json_encode([
        "error" => "EXCEPTION",
        "message" => $e->getMessage(),
        "file" => $e->getFile(),
        "line" => $e->getLine()
    ]);
    exit;
});


require 'vendor/autoload.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;


require_once 'generated/GolampiLexer.php';
require_once 'generated/GolampiParser.php';

require_once 'generated/GolampiVisitor.php';
require_once 'generated/GolampiBaseVisitor.php';
require_once 'src/Semantic/CustomErrorListener.php';

require_once 'src/Semantic/Scope.php';
require_once 'src/Semantic/Symbol.php';
require_once 'src/Semantic/BaseScope.php';
require_once 'src/Semantic/GlobalScope.php';
require_once 'src/Semantic/LocalScope.php';
require_once 'src/Semantic/SymbolTable.php';
require_once 'src/Semantic/SemanticVisitor.php';
require_once 'src/Semantic/ExecutionVisitor.php';

use App\Semantic\CustomErrorListener;
use SemanticVisitor;
use ExecutionVisitor;

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
$code = $data["code"] ?? "";

$output = "";
$errors = [];

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {

    // 1 Crear InputStream 
    $inputStream = InputStream::fromString($code);

    // 2 Crear lexer y parser
    $lexer = new GolampiLexer($inputStream);
    $tokens = new CommonTokenStream($lexer);
    $parser = new GolampiParser($tokens);

    // 3 Remover listeners por defecto
    $lexer->removeErrorListeners();
    $parser->removeErrorListeners();

    // 4 Agregar listener personalizado
    $errorListener = new CustomErrorListener();
    $lexer->addErrorListener($errorListener);
    $parser->addErrorListener($errorListener);

    // 5 Parsear
    $tree = $parser->program();

    $semanticVisitor = new SemanticVisitor();
    $semanticVisitor->visit($tree);

    $semanticErrors = $semanticVisitor->errors;

    $errors = $errorListener->errors;

    if (!empty($errors)) {

        $output = "X Errores sintácticos encontrados:\n";

        foreach ($errors as $error) {
            $output .= "Línea {$error['line']}, Col {$error['column']}: {$error['message']}\n";
        }
    } else {
        $output = "✔ Análisis sintáctico exitoso";
    }

    if (!empty($semanticErrors)) {

        $output .= "\nErrores Semánticos:\n";

        foreach ($semanticErrors as $error) {
            $output .= "Línea {$error['line']}, Col {$error['column']}: {$error['message']}\n";
        }
    } else {
        $output = "✔ Análisis semantico exitoso";
    }

    // =============================
    // SI HAY ERRORES SINTACTICOS
    // =============================

    if (!empty($errors)) {

        echo json_encode([
            "output" => $output
        ]);
        exit;
    }

    // =============================
    // SI HAY ERRORES SEMANTICOS
    // =============================

    if (!empty($semanticErrors)) {

        echo json_encode([
            "output" => $output
        ]);
        exit;
    }

    // =============================
    // EJECUCION DEL PROGRAMA
    // =============================

    $executor = new ExecutionVisitor();
    $executor->visit($tree);

    echo json_encode([
        "output" => $executor->output
    ]);
} catch (Throwable $e) {

    //$output = "X Error interno: " . $e->getMessage();
    echo json_encode([
        "error" => "RUNTIME ERROR",
        "message" => $e->getMessage(),
        "line" => $e->getLine(),
        "file" => $e->getFile()
    ]);

    exit;
}

// echo json_encode([
//     "output" => $output
// ]);
