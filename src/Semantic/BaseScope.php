<?php

namespace App\Semantic;

abstract class BaseScope implements Scope
{
    protected ?Scope $enclosingScope;
    protected array $symbols = [];

    public function __construct(?Scope $enclosingScope)
    {
        $this->enclosingScope = $enclosingScope;
    }

    public function getEnclosingScope(): ?Scope
    {
        return $this->enclosingScope;
    }

    public function define(Symbol $symbol): void
    {
        $this->symbols[$symbol->name] = $symbol;
    }

    public function resolve(string $name): ?Symbol
    {
        if (isset($this->symbols[$name])) {
            return $this->symbols[$name];
        }

        if ($this->enclosingScope !== null) {
            return $this->enclosingScope->resolve($name);
        }

        return null;
    }

    public function getSymbols(): array
    {
        return $this->symbols;
    }

    public function resolveLocal(string $name): ?Symbol
    {
        return $this->symbols[$name] ?? null;
    }
}
