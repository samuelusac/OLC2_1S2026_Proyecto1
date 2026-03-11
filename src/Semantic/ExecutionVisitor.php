<?php

//use GolampiBaseVisitor;

class ExecutionVisitor extends GolampiBaseVisitor
{
    public array $memory = [];
    public string $output = "";

    /*
    =========================
    PROGRAM
    =========================
    */

    public function visitProgram($ctx)
    {
        return $this->visitChildren($ctx);
    }

    /*
    =========================
    VARIABLES
    =========================
    */

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

    public function visitAssignment($ctx)
    {
        $name = $ctx->lvalue()->ID()->getText();
        $value = $this->visit($ctx->expression());

        $this->memory[$name] = $value;
    }

    /*
    =========================
    EXPRESIONES
    =========================
    */

    public function visitExpression($ctx)
    {
        return $this->visitChildren($ctx);
    }

    public function visitAdditive($ctx)
    {
        $value = $this->visit($ctx->multiplicative(0));

        for ($i=1;$i<count($ctx->multiplicative());$i++) {

            $right = $this->visit($ctx->multiplicative($i));
            $op = $ctx->getChild(2*$i-1)->getText();

            if ($op=="+") $value += $right;
            if ($op=="-") $value -= $right;

        }

        return $value;
    }

    public function visitMultiplicative($ctx)
    {
        $value = $this->visit($ctx->unary(0));

        for ($i=1;$i<count($ctx->unary());$i++) {

            $right = $this->visit($ctx->unary($i));
            $op = $ctx->getChild(2*$i-1)->getText();

            if ($op=="*") $value *= $right;
            if ($op=="/") $value /= $right;
            if ($op=="%") $value %= $right;

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

        if ($ctx->getText()=="true") return true;
        if ($ctx->getText()=="false") return false;

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

        // fmt.Println
        if ($ids[0]->getText()=="fmt" && $ids[1]->getText()=="Println") {

            $this->output .= implode(" ",$args) . "\n";
            return null;

        }

        // len
        if ($ids[0]->getText()=="len") {

            return strlen($args[0]);

        }

        // now
        if ($ids[0]->getText()=="now") {

            return date("Y-m-d H:i:s");

        }

        // substr
        if ($ids[0]->getText()=="substr") {

            return substr($args[0],$args[1],$args[2]);

        }

        // typeOf
        if ($ids[0]->getText()=="typeOf") {

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