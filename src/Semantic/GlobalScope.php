<?php

namespace App\Semantic;

class GlobalScope extends BaseScope
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function getScopeName(): string
    {
        return "global";
    }
}