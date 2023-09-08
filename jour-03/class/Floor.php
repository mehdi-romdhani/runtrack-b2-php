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

    public function getId(): ?int 
    {
        return $this->id;
    }

    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void 
    {
        $this->name = $name;
    }
    
    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
    }
}
