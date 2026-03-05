<?php


use GolampiBaseVisitor;
use GolampiParser;

class SemanticVisitor extends GolampiBaseVisitor
{
    public SymbolTable $symbolTable;
    public array $errors = [];

    public function __construct()
    {
        $this->symbolTable = new SymbolTable();
    }

    /*
    =========================
    DECLARACIÓN DE VARIABLES
    =========================
    */

    public function visitVarDecl($ctx)
    {
        $type = $ctx->type()->getText();

        $ids = $ctx->idList()->ID();

        foreach ($ids as $idToken) {

            $name = $idToken->getText();

            if ($this->symbolTable->currentScope->resolveLocal($name)) {

                $this->errors[] = [
                    "line" => $idToken->getLine(),
                    "column" => $idToken->getCharPositionInLine(),
                    "message" => "Variable '$name' ya declarada en este scope"
                ];

                continue;
            }

            $symbol = new Symbol($name, $type);

            $this->symbolTable->currentScope->define($symbol);
        }

        if ($ctx->exprList()) {

            $exprs = $ctx->exprList()->expression();

            if (count($exprs) != count($ids)) {

                $this->errors[] = [
                    "line" => $ctx->getStart()->getLine(),
                    "column" => $ctx->getStart()->getCharPositionInLine(),
                    "message" => "Cantidad de variables y expresiones no coincide"
                ];
            }
        }

        return null;
    }

    public function visitShortVarDecl($ctx)
    {
        $ids = $ctx->idList()->ID();
        $exprs = $ctx->exprList()->expression();

        if (count($ids) !== count($exprs)) {

            $this->errors[] = [
                "line" => $ctx->getStart()->getLine(),
                "column" => $ctx->getStart()->getCharPositionInLine(),
                "message" => "Cantidad de variables y expresiones no coincide"
            ];

            return null;
        }

        foreach ($ids as $i => $idToken) {

            $name = $idToken->getText();

            if ($this->symbolTable->currentScope->resolveLocal($name)) {

                $this->errors[] = [
                    "line" => $idToken->getSymbol()->getLine(),
                    "column" => $idToken->getSymbol()->getCharPositionInLine(),
                    "message" => "Variable '$name' ya declarada en este scope"
                ];

                continue;
            }

            //  Inferir tipo
            $expr = $exprs[$i];
            $type = $this->inferType($expr);

            // Crear símbolo
            $symbol = new Symbol($name, $type);

            //  Insertar en tabla
            $this->symbolTable->currentScope->define($symbol);
        }

        return null;
    }

    private function inferType($expr)
    {
        $text = $expr->getText();

        // entero
        if (preg_match('/^[0-9]+$/', $text)) {
            return "int";
        }

        // float
        if (preg_match('/^[0-9]+\.[0-9]+$/', $text)) {
            return "float";
        }

        // string
        if (preg_match('/^".*"$/', $text)) {
            return "string";
        }

        // boolean
        if ($text === "true" || $text === "false") {
            return "bool";
        }

        // variable existente
        $symbol = $this->symbolTable->resolve($text);
        if ($symbol) {
            return $symbol->type;
        }

        return "unknown";
    }

    /*
    =========================
    USO DE VARIABLE
    =========================
    */

    public function visitPrimaryExpr($ctx)
    {
        if ($ctx->ID()) {

            $name = $ctx->ID()->getText();

            $symbol = $this->symbolTable->resolve($name);

            $this->errors[] = [
                "line" => $ctx->getStart()->getLine(),
                "column" => $ctx->getStart()->getCharPositionInLine(),
                "message" => "Variable '$name' no declarada"
            ];
        }

        return $this->visitChildren($ctx);
    }

    /*
    =========================
    BLOQUES (SCOPES)
    =========================
    */

    public function visitBlock($ctx)
    {
        $this->symbolTable->enterScope();

        $this->visitChildren($ctx);

        $this->symbolTable->exitScope();

        return null;
    }
}
