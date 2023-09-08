<?php 


require_once './Student.php';

$studentModel = new Student(1, 2, 'yahoo@student.com', 'Terrence Terry', new DateTime('2023-09-08'), "male");
$studentModel = new Student();

var_dump($studentModel);
