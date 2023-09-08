<?php

/* Class Grade */

class Grade
{
    private ?int $id;
    private ?int $room_id;
    private ?string $name;
    private ?DateTime $year;


    function __construct(int $a = 2, int $b = 5 , string $c = "Bachelor 2 Web", DateTime $year = new DateTime('2022-01-09'))
    {
        $this->id = $a;
        $this->room_id = $b;
        $this->name = $c;
        $this->year = $year;
    }

    
}
