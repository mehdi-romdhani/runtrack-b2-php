<?php

require_once './class/Student.php';
require_once './class/Grade.php';
require_once './class/Floor.php';
require_once './class/Room.php';




function connectDB()
{
    $user = 'root';
    $pass = '';
    try {
        return $dbh = new PDO('mysql:host=localhost;dbname=lp_official', $user, $pass);
        // return 'connect';
    } catch (PDOException $e) {
        // tenter de réessayer la connexion après un certain délai, par exemple
    }
}


function findOneStudent(int $id): Student
{

    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM student WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
    $studentID = new Student($fetch['id'], $fetch['grade_id'], $fetch['email'], $fetch['fullname'], new DateTime($fetch['birthdate']), $fetch['gender']);

    return $studentID;
}

function findOneGrade(int $id): Grade
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM grade WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
    $gradeID = new Grade($fetch['id'], $fetch['room_id'], $fetch['name'], new DateTime($fetch['year']));
    return $gradeID;
}

function findOneFloor(int $id): Floor
{

    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM floor WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
    $floorId = new Floor($fetch['id'], $fetch['name'], $fetch['level']);
    return $floorId;
}

function findOneRoom(int $id): Room
{
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM room WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
    $roomId = new Room($fetch['id'], $fetch['floor_id'], $fetch['name'], $fetch['capacity']);
    return $roomId;
}


findOneStudent(2);
findOneGrade(12);
findOneFloor(3);
findOneRoom(10);