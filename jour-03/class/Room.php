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
}
