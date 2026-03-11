<?php



class Symbol
{
    public string $name;
    public string $type;
    public bool $initialized = false;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}