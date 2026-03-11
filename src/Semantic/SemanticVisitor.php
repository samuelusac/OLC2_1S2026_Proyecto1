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

            if ($ctx->exprList()) {
                $symbol->initialized = true;
            }

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
            } else {

                foreach ($exprs as $i => $expr) {

                    $exprType = $this->visit($expr);

                    if ($exprType !== $type && $exprType !== "unknown") {

                        $this->errors[] = [
                            "line" => $expr->getStart()->getLine(),
                            "column" => $expr->getStart()->getCharPositionInLine(),
                            "message" => "Tipo incompatible: se esperaba $type pero se obtuvo $exprType"
                        ];
                    }
                }
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

        $newVariableFound = false;

        foreach ($ids as $i => $idToken) {

            $name = $idToken->getText();
            $existing = $this->symbolTable->currentScope->resolveLocal($name);

            $exprType = $this->visit($exprs[$i]);

            if ($existing) {

                // Validar tipo compatible
                if ($existing->type !== $exprType && $exprType !== "unknown") {

                    $this->errors[] = [
                        "line" => $idToken->getSymbol()->getLine(),
                        "column" => $idToken->getSymbol()->getCharPositionInLine(),
                        "message" => "Asignación incompatible para '$name'"
                    ];
                }
            } else {

                $newVariableFound = true;

                $symbol = new Symbol($name, $exprType);
                $symbol->initialized = true;
                $this->symbolTable->currentScope->define($symbol);
            }
        }

        if (!$newVariableFound) {

            $this->errors[] = [
                "line" => $ctx->getStart()->getLine(),
                "column" => $ctx->getStart()->getCharPositionInLine(),
                "message" => "Short declaration requiere al menos una variable nueva"
            ];
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

            if (!$symbol) {

                $this->errors[] = [
                    "line" => $ctx->getStart()->getLine(),
                    "column" => $ctx->getStart()->getCharPositionInLine(),
                    "message" => "Variable '$name' no declarada"
                ];
            }
        }

        return $this->visitChildren($ctx);
    }

    public function visitArrayAccess($ctx)
    {
        $name = $ctx->ID()->getText();

        $symbol = $this->symbolTable->resolve($name);

        if (!$symbol) {

            $this->errors[] = [
                "line" => $ctx->start->getLine(),
                "column" => $ctx->start->getCharPositionInLine(),
                "message" => "Variable '$name' no declarada"
            ];

            return "unknown";
        }

        $type = $symbol->type;

        if (substr($type, -2) !== "[]") {

            $this->errors[] = [
                "line" => $ctx->start->getLine(),
                "column" => $ctx->start->getCharPositionInLine(),
                "message" => "'$name' no es un array"
            ];

            return "unknown";
        }

        // dimensiones
        $dimensions = substr_count($type, "[]");
        $usedDimensions = count($ctx->expression());

        if ($usedDimensions > $dimensions) {

            $this->errors[] = [
                "line" => $ctx->start->getLine(),
                "column" => $ctx->start->getCharPositionInLine(),
                "message" => "Demasiados índices para el array '$name'"
            ];

            return "unknown";
        }

        // validar indices
        foreach ($ctx->expression() as $expr) {

            $indexType = $this->visit($expr);

            if ($indexType !== "int") {

                $this->errors[] = [
                    "line" => $expr->getStart()->getLine(),
                    "column" => $expr->getStart()->getCharPositionInLine(),
                    "message" => "El índice del array debe ser int"
                ];
            }
        }

        // devolver tipo base
        $resultType = $type;

        for ($i = 0; $i < $usedDimensions; $i++) {
            $resultType = substr($resultType, 0, -2);
        }

        return $resultType;
    }

    /*
    =========================
    ASIGNACION DE VARIABLE
    =========================
    */
    // public function visitAssignment($ctx)
    // {
    //     $lvalue = $ctx->lvalue();

    //     // Solo manejamos el caso ID por ahora
    //     if ($lvalue->ID()) {

    //         $idNode = $lvalue->ID();
    //         $name = $idNode->getText();

    //         $symbol = $this->symbolTable->resolve($name);

    //         // 1 Variable no declarada
    //         if ($symbol === null) {

    //             $this->errors[] = [
    //                 "line" => $idNode->getSymbol()->getLine(),
    //                 "column" => $idNode->getSymbol()->getCharPositionInLine(),
    //                 "message" => "Variable '$name' no declarada"
    //             ];

    //             return null;
    //         }

    //         // 2 Tipo de expresión
    //         $exprType = $this->visit($ctx->expression());

    //         // 3 Operador de asignación
    //         $operator = $ctx->assignOp()->getText();

    //         // 4 Validar operador
    //         if ($operator !== '=') {

    //             // operadores como += -= *= /= requieren números
    //             if ($symbol->type !== "int" && $symbol->type !== "float") {

    //                 $this->errors[] = [
    //                     "line" => $idNode->getSymbol()->getLine(),
    //                     "column" => $idNode->getSymbol()->getCharPositionInLine(),
    //                     "message" => "Operador '$operator' solo válido para tipos numéricos"
    //                 ];
    //             }
    //         }

    //         // 5 Validar tipos
    //         if ($symbol->type !== $exprType && $exprType !== "unknown") {

    //             $this->errors[] = [
    //                 "line" => $idNode->getSymbol()->getLine(),
    //                 "column" => $idNode->getSymbol()->getCharPositionInLine(),
    //                 "message" => "Asignación incompatible: '$name' es {$symbol->type} pero recibe {$exprType}"
    //             ];
    //         }
    //     }

    //     return $this->visitChildren($ctx);
    // }

    public function visitAssignment($ctx)
    {
        $leftType = $this->visit($ctx->lvalue());
        $rightType = $this->visit($ctx->expression());

        if ($leftType === "unknown" || $rightType === "unknown") {
            return "unknown";
        }

        if ($leftType !== $rightType) {

            $this->errors[] = [
                "line" => $ctx->start->getLine(),
                "column" => $ctx->start->getCharPositionInLine(),
                "message" => "No se puede asignar $rightType a $leftType"
            ];

            return "unknown";
        }

        return $leftType;
    }

    public function visitSimpleIncDec($ctx)
    {
        $type = $this->visit($ctx->lvalue());

        if (!in_array($type, ["int", "float"])) {

            $this->errors[] = [
                "line" => $ctx->start->getLine(),
                "column" => $ctx->start->getCharPositionInLine(),
                "message" => "Operador ++/-- requiere variable numérica"
            ];
        }

        return null;
    }

    public function visitLvalue($ctx)
    {
        // caso: ID
        if ($ctx->ID()) {

            $name = $ctx->ID()->getText();

            $symbol = $this->symbolTable->resolve($name);

            if (!$symbol) {

                $this->errors[] = [
                    "line" => $ctx->ID()->getSymbol()->getLine(),
                    "column" => $ctx->ID()->getSymbol()->getCharPositionInLine(),
                    "message" => "Variable '$name' no declarada"
                ];

                return "unknown";
            }

            return $symbol->type;
        }

        // caso: arrayAccess
        if ($ctx->arrayAccess()) {
            return $this->visit($ctx->arrayAccess());
        }

        // caso: *expression
        if ($ctx->getChild(0)->getText() === '*') {

            $type = $this->visit($ctx->expression());

            if (substr($type, -1) !== "*") {

                $this->errors[] = [
                    "line" => $ctx->start->getLine(),
                    "column" => $ctx->start->getCharPositionInLine(),
                    "message" => "No se puede desreferenciar un tipo no puntero ($type)"
                ];

                return "unknown";
            }

            // quitar el *
            return substr($type, 0, -1);
        }

        return "unknown";
    }

    /*
    =========================
    Expresiones
    =========================
    */

    public function visitExpression($ctx)
    {
        return $this->visit($ctx->logicalOr());
    }

    public function visitLogicalOr($ctx)
    {
        $left = $this->visit($ctx->logicalAnd(0));

        if (count($ctx->logicalAnd()) == 1) {
            return $left;
        }

        for ($i = 1; $i < count($ctx->logicalAnd()); $i++) {

            $right = $this->visit($ctx->logicalAnd($i));

            if ($left !== "bool" || $right !== "bool") {

                $this->errors[] = [
                    "line" => $ctx->start->getLine(),
                    "column" => $ctx->start->getCharPositionInLine(),
                    "message" => "Operador || requiere booleanos"
                ];

                return "unknown";
            }

            $left = "bool";
        }

        return "bool";
    }

    public function visitLogicalAnd($ctx)
    {
        $left = $this->visit($ctx->equality(0));

        if (count($ctx->equality()) == 1) {
            return $left;
        }

        for ($i = 1; $i < count($ctx->equality()); $i++) {

            $right = $this->visit($ctx->equality($i));

            if ($left !== "bool" || $right !== "bool") {

                $this->errors[] = [
                    "line" => $ctx->start->getLine(),
                    "column" => $ctx->start->getCharPositionInLine(),
                    "message" => "Operador && requiere booleanos"
                ];

                return "unknown";
            }

            $left = "bool";
        }

        return "bool";
    }

    public function visitEquality($ctx)
    {
        $left = $this->visit($ctx->relational(0));

        if (count($ctx->relational()) == 1) {
            return $left;
        }

        for ($i = 1; $i < count($ctx->relational()); $i++) {

            $right = $this->visit($ctx->relational($i));

            if ($left !== $right) {

                $this->errors[] = [
                    "line" => $ctx->start->getLine(),
                    "column" => $ctx->start->getCharPositionInLine(),
                    "message" => "Comparación entre tipos incompatibles ($left y $right)"
                ];

                return "unknown";
            }

            $left = "bool";
        }

        return "bool";
    }

    public function visitRelational($ctx)
    {
        $left = $this->visit($ctx->additive(0));

        if (count($ctx->additive()) == 1) {
            return $left;
        }

        for ($i = 1; $i < count($ctx->additive()); $i++) {

            $right = $this->visit($ctx->additive($i));

            if (!in_array($left, ["int", "float"]) || !in_array($right, ["int", "float"])) {

                $this->errors[] = [
                    "line" => $ctx->start->getLine(),
                    "column" => $ctx->start->getCharPositionInLine(),
                    "message" => "Operadores relacionales requieren números"
                ];

                return "unknown";
            }

            return "bool"; //$left = "bool";
        }

        return "bool";
    }

    public function visitAdditive($ctx)
    {
        $left = $this->visit($ctx->multiplicative(0));

        if (count($ctx->multiplicative()) == 1) {
            return $left;
        }

        for ($i = 1; $i < count($ctx->multiplicative()); $i++) {

            $right = $this->visit($ctx->multiplicative($i));

            if (!in_array($left, ["int", "float"]) || !in_array($right, ["int", "float"])) {

                $this->errors[] = [
                    "line" => $ctx->start->getLine(),
                    "column" => $ctx->start->getCharPositionInLine(),
                    "message" => "Operadores + y - requieren números"
                ];

                return "unknown";
            }

            if ($left == "float" || $right == "float") {
                $left = "float";
            } else {
                $left = "int";
            }
        }

        return $left;
    }

    public function visitMultiplicative($ctx)
    {
        $left = $this->visit($ctx->unary(0));

        if (count($ctx->unary()) == 1) {
            return $left;
        }

        for ($i = 1; $i < count($ctx->unary()); $i++) {

            $right = $this->visit($ctx->unary($i));

            if (!in_array($left, ["int", "float"]) || !in_array($right, ["int", "float"])) {

                $this->errors[] = [
                    "line" => $ctx->start->getLine(),
                    "column" => $ctx->start->getCharPositionInLine(),
                    "message" => "Operadores *, / requieren números"
                ];

                return "unknown";
            }

            if ($left == "float" || $right == "float") {
                $left = "float";
            } else {
                $left = "int";
            }
        }

        return $left;
    }

    public function visitUnary($ctx)
    {
        // caso base
        if ($ctx->primary()) {
            return $this->visit($ctx->primary());
        }

        $op = $ctx->getChild(0)->getText();

        $type = $this->visit($ctx->unary());

        switch ($op) {

            case '!':
                if ($type !== "bool") {

                    $this->errors[] = [
                        "line" => $ctx->start->getLine(),
                        "column" => $ctx->start->getCharPositionInLine(),
                        "message" => "Operador ! requiere booleano"
                    ];

                    return "unknown";
                }

                return "bool";


            case '-':

                if (!in_array($type, ["int", "float"])) {

                    $this->errors[] = [
                        "line" => $ctx->start->getLine(),
                        "column" => $ctx->start->getCharPositionInLine(),
                        "message" => "Operador - requiere número"
                    ];

                    return "unknown";
                }

                return $type;


            case '&':

                if (!$ctx->unary()->primary()->ID()) {

                    $this->errors[] = [
                        "line" => $ctx->start->getLine(),
                        "column" => $ctx->start->getCharPositionInLine(),
                        "message" => "Operador & requiere variable"
                    ];

                    return "unknown";
                }

                return $type . "*";


            case '*':

                // dereference
                if (substr($type, -1) !== "*") {

                    $this->errors[] = [
                        "line" => $ctx->start->getLine(),
                        "column" => $ctx->start->getCharPositionInLine(),
                        "message" => "No se puede desreferenciar tipo no puntero ($type)"
                    ];

                    return "unknown";
                }

                return substr($type, 0, -1);
        }

        return "unknown";
    }

    public function visitPrimary($ctx)
    {
        if ($ctx->literal()) {
            return $this->visit($ctx->literal());
        }

        if ($ctx->ID()) {

            $name = $ctx->ID()->getText();

            $symbol = $this->symbolTable->resolve($name);

            if (!$symbol) {

                $this->errors[] = [
                    "line" => $ctx->start->getLine(),
                    "column" => $ctx->start->getCharPositionInLine(),
                    "message" => "Variable '$name' no declarada"
                ];

                return "unknown";
            }

            return $symbol->type;
        }

        if ($ctx->expression()) {
            return $this->visit($ctx->expression());
        }

        return "unknown";
    }

    public function visitLiteral($ctx)
    {
        if ($ctx->INT()) return "int";
        if ($ctx->FLOAT()) return "float";
        if ($ctx->STRING()) return "string";
        if ($ctx->CHAR()) return "rune";

        if ($ctx->getText() === "true" || $ctx->getText() === "false") {
            return "bool";
        }

        return "unknown";
    }

    /*
    =========================
    Sentencias
    =========================
    */

    public function visitIfStmt($ctx)
    {
        $condType = $this->visit($ctx->expression());

        if ($condType !== "bool") {

            $this->errors[] = [
                "line" => $ctx->expression()->getStart()->getLine(),
                "column" => $ctx->expression()->getStart()->getCharPositionInLine(),
                "message" => "La condición del if debe ser bool, se obtuvo $condType"
            ];
        }

        $this->visit($ctx->block(0));

        if ($ctx->block(1)) {
            $this->visit($ctx->block(1));
        }

        return null;
    }

    public function visitForClassic($ctx)
    {
        // 1 INIT
        if ($ctx->simpleVarDecl()) {
            $this->visit($ctx->simpleVarDecl());
        }

        if ($ctx->simpleShortVarDecl()) {
            $this->visit($ctx->simpleShortVarDecl());
        }

        if ($ctx->simpleAssignment()) {
            $this->visit($ctx->simpleAssignment());
        }

        // 2 CONDITION
        if ($ctx->expression()) {

            $condType = $this->visit($ctx->expression());

            if ($condType !== "bool") {

                $this->errors[] = [
                    "line" => $ctx->expression()->getStart()->getLine(),
                    "column" => $ctx->expression()->getStart()->getCharPositionInLine(),
                    "message" => "La condición del for debe ser bool, se obtuvo $condType"
                ];
            }
        }

        // 3 UPDATE
        if ($ctx->simpleIncDec()) {
            $this->visit($ctx->simpleIncDec());
        }

        // 4 BODY
        if ($ctx->block()) {
            $this->visit($ctx->block());
        }


        return null;
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
