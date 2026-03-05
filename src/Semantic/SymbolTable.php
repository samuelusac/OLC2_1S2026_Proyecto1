<?php



class SymbolTable
{
    public Scope $currentScope;

    public function __construct()
    {
        $this->currentScope = new GlobalScope();
    }

    public function enterScope(): void
    {
        $this->currentScope = new LocalScope($this->currentScope);
    }

    public function exitScope(): void
    {
        $this->currentScope = $this->currentScope->getEnclosingScope();
    }

    public function define(Symbol $symbol): void
    {
        $this->currentScope->define($symbol);
    }

    public function resolve(string $name): ?Symbol
    {
        return $this->currentScope->resolve($name);
    }
}