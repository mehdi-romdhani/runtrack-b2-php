<?php

function find_all_students()
{

    $user = 'root';
    $pass = '';

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=lp_official', $user, $pass);
        // return 'connect';
    } catch (PDOException $e) {
        // tenter de réessayer la connexion après un certain délai, par exemple
    }

    $query = $dbh->prepare('SELECT * FROM student');
    $query->execute();
    $result_student = $query->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result_student);
    return $result_student;
}

var_dump(find_all_students());
// find_all_students();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-01</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
    <table>
    <tr>
        <th>ID</th>
        <th>Grade ID</th>
        <th>Email</th>
        <th>Full Name</th>
        <th>Birthdate</th>
        <th>Gender</th>
    </tr>

    <?php foreach (find_all_students() as $find) : ?>
        <tr>
            <td><?= $find['id'] ?></td>
            <td><?= $find['grade_id'] ?></td>
            <td><?= $find['email'] ?></td>
            <td><?= $find['fullname'] ?></td>
            <td><?= $find['birthdate'] ?></td>
            <td><?= $find['gender'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>

</html>