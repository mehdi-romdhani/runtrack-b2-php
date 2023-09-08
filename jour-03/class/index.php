<?php


require_once './Student.php';
require_once './Grade.php';
require_once './Room.php';
require_once './Floor.php';


/*********************************************/

$studentModel = new Student(1, 2, 'yahoo@student.com', 'Terrence Terry', new DateTime('2023-09-08'), "male");
$studentModel = new Student();


/*********************************************/

$grade = new Grade(1, 8, "Bachelor 1", new DateTime('2023-01-09'));
$grade = new Grade();

/*********************************************/

$room = new Room(1, 1, "RDC Food & Drinks", 90);
$room = new Room();

/*********************************************/

$floor = new Floor(1, "Rez-de-chaussée", 0);
$floor = new Floor();





