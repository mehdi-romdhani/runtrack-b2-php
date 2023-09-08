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
}
