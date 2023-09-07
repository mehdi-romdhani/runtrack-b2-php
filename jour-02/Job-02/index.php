<?php

function find_one_student($email)
{

    $user = 'root';
    $pass = '';

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=lp_official', $user, $pass);
        // return 'connect';
    } catch (PDOException $e) {
        // tenter de réessayer la connexion après un certain délai, par exemple
    }

    $query = $dbh->prepare("SELECT * FROM student WHERE email = :email ");
    $query->bindParam(':email', $email);
    $query->execute();
    $result_student = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result_student;
}



if (isset($_GET['input-email-student'])) {
    find_one_student($_GET['input-email-student']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-02</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <form method="GET">
        <p>All Student</p>
        <label for="Email">Email Student</label>
        <input type="text" placeholder="enter your email" name="input-email-student" id="email">
        <button type="submit">Search</button>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Grade ID</th>
            <th>Email</th>
            <th>Full Name</th>
            <th>Birthdate</th>
            <th>Gender</th>
        </tr>

        <?php foreach (find_one_student(@$_GET['input-email-student']) as $find) : ?>
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

</html>