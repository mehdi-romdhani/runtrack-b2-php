<?php

/* Class Student */

class Student
{

    private ?int $id;
    private ?int $grade_id;
    private ?string $email;
    private ?string $fullname;
    private ?DateTime $birthdate;
    private ?string $gender;



    public function __construct(int $a = 1, int $b = 2, string $c = "student@student.fr", string $d = 'mehdi romdhani', DateTime $e = new DateTime('2023-08-09'), string $f = "male")
    {
        /* empty */
        $this->id = $a;
        $this->grade_id = $b;
        $this->email = $c;
        $this->fullname = $d;
        $this->birthdate = $e;
        $this->gender = $f;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public  function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getGradeId(): ?int
    {
        return $this->grade_id;
    }

    public function setGradeId(int $grade_id): void
    {
        $this->grade_id = $grade_id;
    }

    public function getEmail() : ?string
    {
        return $this->email;

    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getFullName(): ?string
    {
        return $this->fullname;
    }

    public function setFullName(string $fullname) : void 
    {
        $this->fullname = $fullname;
    }

    public function getBirthDate(): ?DateTime
    {
        return $this->birthdate;
    }
    
    public function setBirthDate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }
    
    public function setGender( string $gender): void
    {
        $this->gender = $gender;
    }
}

