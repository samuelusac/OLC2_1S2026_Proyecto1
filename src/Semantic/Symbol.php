<?php



class Symbol
{
    public string $name;
    public string $type;
    public bool $initialized = false;
    public bool $isConst = false;

    public function __construct(string $name, string $type, $isConst = false)
    {
        $this->name = $name;
        $this->type = $type;
        $this->isConst = $isConst;
    }
}