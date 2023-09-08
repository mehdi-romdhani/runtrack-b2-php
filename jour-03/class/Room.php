<?php


/* Class Room*/

class Room
{
    private ?int $id;
    private ?int $floorid;
    private ?string $name;
    private ?int $capacity;


    function __construct(int $a = 2, int $b = 1, string $c = "Sound Studio", int $d = 5)
    {
        $this->id = $a;
        $this->floorid = $b;
        $this->name = $c;
        $this->capacity = $d;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    public function getFloorId(): ?int
    {
        return $this->floorid;
    }

    public function setFloorId(int $floorid): void
    {
        $this->floorid= $floorid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void 
    {
        $this->name = $name;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(string $capacity): void 
    {
        $this->capacity = $capacity;
    }


}
