<?php

//use GolampiBaseVisitor;

use Context\ForWhileContext;

class ExecutionVisitor extends GolampiBaseVisitor
{
    public array $memory = [];
    public string $output = "";
    public array $constants = [];

    /*
    =========================
    PROGRAM
    =========================
    */

    public function visitProgram($ctx)
    {
        return $this->visitChildren($ctx);
    }

    public function visitStatement($ctx)
    {
        return $this->visitChildren($ctx);
    }


    /*
    =========================
    VARIABLES
    =========================
    */

    public function visitConstDecl($ctx)
    {
        $name = $ctx->ID()->getText();
        $value = $this->visit($ctx->expression());

        $this->memory[$name] = $value;
        $this->constants[$name] = true;

        return null;
    }

    public function visitVarDecl($ctx)
    {
        $ids = $ctx->idList()->ID();

        if ($ctx->exprList()) {

            $values = [];

            foreach ($ctx->exprList()->expression() as $expr) {
                $values[] = $this->visit($expr);
            }

            foreach ($ids as $i => $id) {
                $this->memory[$id->getText()] = $values[$i] ?? null;
            }
        } else {

            foreach ($ids as $id) {
                $this->memory[$id->getText()] = null;
            }
        }
    }

    public function visitShortVarDecl($ctx)
    {
        $ids = $ctx->idList()->ID();
        $exprs = $ctx->exprList()->expression();

        foreach ($ids as $i => $id) {

            $value = $this->visit($exprs[$i]);
            $this->memory[$id->getText()] = $value;
        }
    }

    /*
    =========================
    ASIGNACION
    =========================
    */

    // public function visitAssignment($ctx)
    // {

    //     $name = $ctx->lvalue()->ID()->getText();
    //     $value = $this->visit($ctx->expression());
    //     if (isset($this->constants[$name])) {
    //         throw new Exception("No se puede modificar constante '$name'");
    //     }

    //     $this->memory[$name] = $value;
    // }

    public function visitForClassic($ctx)
    {
        echo "init" . get_class($ctx->getChild(0)) . "\n";
        $init = $ctx->getChild(0);
        $condition = $ctx->getChild(2);
        $update = $ctx->getChild(4);
        $block = $ctx->getChild($ctx->getChildCount() - 1);

        if ($init && $init->getText() !== ";") {
            $this->visit($init);
        }

        // 2. LOOP
        while (true) {

            // condición
            if ($condition && $condition->getText() !== ";") {

                $condValue = $this->visit($condition);

                if (!$condValue) {
                    break;
                }
            }

            // ejecutar bloque
            $this->visit($block);
            if($update->getText() !== "{") {
                $this->visit($update);
            }
        }

        

        // Obtener hijos manualmente
        // for ($i = 0; $i < $ctx->getChildCount(); $i++) {
        //     $children[] = $ctx->getChild($i);
        // }

        /*
    Estructura:
    [init] ; [condition] ; [update] block
    */

        // $init = $children[0] ?? null;
        // $condition = $children[2] ?? null;
        // $update = $children[4] ?? null;
        // $block = $children[count($children) - 1];

        // 1. INIT
        // if ($init && $init->getText() !== ";") {
        //     $this->visit($init);
        // }
        // if($ctx->getChildCount()>=1){
        //     $first = $ctx->getChild(0);
        //     if($first->getText() !== ";"){
        //         $this->visit($first);
        //     }
        // }
        // // 2. LOOP
        // while (true) {

        //     // condición
        //     if ($condition && $condition->getText() !== ";") {

        //         $condValue = $this->visit($condition);

        //         if (!$condValue) {
        //             break;
        //         }
        //     }

        //     // ejecutar bloque
        //     $this->visit($block);

        //     // update
        //     if ($update && $update->getText() !== "{") {
        //         $this->visit($update);
        //     }
        // }

        // return null;
    }

    public function visitForWhile($ctx)
    {
        //var_dump($ctx->expression());
        while (true) {

            $cond = $this->visit($ctx->expression());

            if (!$cond) {
                break;
            }

            $this->visit($ctx->block());
        }
        return null;
    }

    public function visitAssignment($ctx)
    {
        // 🔥 obtener nombre correctamente
        $lvalue = $ctx->lvalue();

        if ($lvalue->getChildCount() == 1) {
            $name = $lvalue->getText();
        } else {
            return null; // ignoramos casos complejos por ahora
        }

        $value = $this->visit($ctx->expression());
        $operator = $ctx->assignOp()->getText();

        // validar que exista
        if (!isset($this->memory[$name])) {
            $this->memory[$name] = 0;
        }

        switch ($operator) {

            case "=":
                $this->memory[$name] = $value;
                break;

            case "+=":
                $this->memory[$name] = $this->memory[$name] + $value;
                break;

            case "-=":
                $this->memory[$name] = $this->memory[$name] - $value;
                break;

            case "*=":
                $this->memory[$name] = $this->memory[$name] * $value;
                break;

            case "/=":
                $this->memory[$name] = $this->memory[$name] / $value;
                break;
        }

        return null;
    }

    /*
    =========================
    EXPRESIONES
    =========================
    */

    public function visitExpression($ctx)
    {
        return $this->visitLogicalOr($ctx);
    }

    public function visitLogicalOr($ctx)
    {
        // Primer valor
        $left = $this->visit($ctx->getChild(0));

        // Si solo hay un hijo → devolver valor real
        if ($ctx->getChildCount() == 1) {
            return $left;
        }

        // short circuit
        if ($left) return true;

        // recorrer operadores
        for ($i = 2; $i < $ctx->getChildCount(); $i += 2) {

            $right = $this->visit($ctx->getChild($i));

            if ($right) return true;
        }

        return false;
    }

    public function visitLogicalAnd($ctx)
    {
        $left = $this->visit($ctx->getChild(0));

        if ($ctx->getChildCount() == 1) {
            return $left;
        }

        if (!$left) return false;

        for ($i = 2; $i < $ctx->getChildCount(); $i += 2) {

            $right = $this->visit($ctx->getChild($i));

            if (!$right) return false;
        }

        return true;
    }

    public function visitAdditive($ctx)
    {
        $value = $this->visit($ctx->multiplicative(0));

        for ($i = 1; $i < count($ctx->multiplicative()); $i++) {

            $right = $this->visit($ctx->multiplicative($i));
            $op = $ctx->getChild(2 * $i - 1)->getText();

            if ($op == "+") $value += $right;
            if ($op == "-") $value -= $right;
        }

        return $value;
    }

    public function visitMultiplicative($ctx)
    {
        $value = $this->visit($ctx->unary(0));

        for ($i = 1; $i < count($ctx->unary()); $i++) {

            $right = $this->visit($ctx->unary($i));
            $op = $ctx->getChild(2 * $i - 1)->getText();

            if ($op == "*") $value *= $right;
            if ($op == "/") $value /= $right;
            if ($op == "%") $value %= $right;
        }

        return $value;
    }

    /*
    =========================
    PRIMARY
    =========================
    */

    public function visitPrimary($ctx)
    {
        if ($ctx->literal()) {
            return $this->visit($ctx->literal());
        }

        if ($ctx->ID()) {

            $name = $ctx->ID()->getText();

            return $this->memory[$name] ?? null;
        }

        if ($ctx->expression()) {
            return $this->visit($ctx->expression());
        }

        if ($ctx->functionCall()) {
            return $this->visit($ctx->functionCall());
        }

        return null;
    }

    /*
    =========================
    LITERALS
    =========================
    */

    public function visitLiteral($ctx)
    {
        if ($ctx->INT()) return intval($ctx->getText());
        if ($ctx->FLOAT()) return floatval($ctx->getText());

        if ($ctx->STRING()) {
            return trim($ctx->getText(), '"');
        }

        if ($ctx->CHAR()) {
            return trim($ctx->getText(), "'");
        }

        if ($ctx->getText() == "true") return true;
        if ($ctx->getText() == "false") return false;

        return null;
    }

    /*
    =========================
    FUNCIONES NATIVAS
    =========================
    */

    public function visitFunctionCall($ctx)
    {
        $ids = $ctx->ID();

        $args = [];

        if ($ctx->exprList()) {
            foreach ($ctx->exprList()->expression() as $expr) {
                $args[] = $this->visit($expr);
            }
        }

        $args = array_map(function ($v) {
            if ($v === true) return "true";
            if ($v === false) return "false";
            if ($v === null) return "nil";
            return $v;
        }, $args);

        // fmt.Println
        if ($ids[0]->getText() == "fmt" && $ids[1]->getText() == "Println") {

            $this->output .= implode(" ", $args) . "\n";
            return null;
        }

        // len
        if ($ids[0]->getText() == "len") {

            return strlen($args[0]);
        }

        // now
        if ($ids[0]->getText() == "now") {

            return date("Y-m-d H:i:s");
        }

        // substr
        if ($ids[0]->getText() == "substr") {

            return substr($args[0], $args[1], $args[2]);
        }

        // typeOf
        if ($ids[0]->getText() == "typeOf") {

            return gettype($args[0]);
        }

        return null;
    }

    /*
    =========================
    IF
    =========================
    */

    public function visitIfStmt($ctx)
    {
        $cond = $this->visit($ctx->expression());

        if ($cond) {

            $this->visit($ctx->block(0));
        } else {

            if ($ctx->block(1)) {
                $this->visit($ctx->block(1));
            }
        }
    }

    /*
    =========================
    BLOCK
    =========================
    */

    public function visitBlock($ctx)
    {
        return $this->visitChildren($ctx);
    }
}
