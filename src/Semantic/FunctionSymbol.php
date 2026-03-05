<?php



class FunctionSymbol extends Symbol
{
    public array $parameters = [];

    public function __construct(string $name, string $returnType)
    {
        parent::__construct($name, $returnType);
    }

    public function addParameter(VariableSymbol $param): void
    {
        $this->parameters[] = $param;
    }
}