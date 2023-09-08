<?php

/* Class Grade */

class Grade
{
    private ?int $id;
    private ?int $room_id;
    private ?string $name;
    private ?DateTime $year;


    function __construct(int $a = 2, int $b = 5, string $c = "Bachelor 2 Web", DateTime $year = new DateTime('2022-01-09'))
    {
        $this->id = $a;
        $this->room_id = $b;
        $this->name = $c;
        $this->year = $year;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getRoomId(): ?int 
    {
        return $this->room_id;
    }

    public function setRoomId(int $room_id): void 
    {
        $this->room_id = $room_id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void 
    {
        $this->name = $name;
    }

    public function getYear(): ?DateTime
    {
        return $this->year;
    }

    public function setYear(DateTime $year): void 
    {
        $this->year = $year;
    }
}
