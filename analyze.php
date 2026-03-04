<?php

require 'vendor/autoload.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;

require_once 'generated/GolampiLexer.php';
require_once 'generated/GolampiParser.php';
require_once 'src/Semantic/CustomErrorListener.php';

use App\Semantic\CustomErrorListener;

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
$code = $data["code"] ?? "";

$output = "";
$errors = [];

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

    $errors = $errorListener->errors;

    if (!empty($errors)) {

        $output = "X Errores sintácticos encontrados:\n";

        foreach ($errors as $error) {
            $output .= "Línea {$error['line']}, Col {$error['column']}: {$error['message']}\n";
        }

    } else {
        $output = "✔ Análisis sintáctico exitoso";
    }

} catch (Throwable $e) {

    $output = "X Error interno: " . $e->getMessage();
}

echo json_encode([
    "output" => $output
]);