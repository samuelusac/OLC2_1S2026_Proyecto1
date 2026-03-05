<?php

namespace App\Semantic;

class LocalScope extends BaseScope
{
    public function __construct(Scope $enclosingScope)
    {
        parent::__construct($enclosingScope);
    }

    public function getScopeName(): string
    {
        return "local";
    }
}