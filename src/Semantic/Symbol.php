<?php

namespace App\Semantic;

class Symbol
{
    public string $name;
    public string $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}