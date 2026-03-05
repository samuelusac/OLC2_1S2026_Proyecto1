<?php

namespace App\Semantic;

interface Scope
{
    public function getScopeName(): string;

    public function getEnclosingScope(): ?Scope;

    public function define(Symbol $symbol): void;

    public function resolve(string $name): ?Symbol;

    public function resolveLocal(string $name): ?Symbol;
}