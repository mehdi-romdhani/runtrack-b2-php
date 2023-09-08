<?php

class Floor
{
    private ?int $id;
    private ?string $name;
    private ?int $level;


    function __construct(int $a = 2, string $b = "1er étage", int $c = 1)
    {
        $this->id = $a;
        $this->name = $b;
        $this->level = $c;
    }
}
