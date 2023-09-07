<?php

function insert_student(array $data)
{
    var_dump($data['input-email']);

    $user = 'root';
    $pass = '';

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=lp_official', $user, $pass);
        // return 'connect';
    } catch (PDOException $e) {
        // tenter de réessayer la connexion après un certain délai, par exemple
    }

    $query = $dbh->prepare("INSERT INTO student(grade_id,email,fullname,birthdate,gender) VALUES (:grade_id,:email,:fullname,:birthdate,:gender)");
    $query->bindParam(':grade_id', $data['input-grade-id']);
    $query->bindParam(':email', $data['input-email']);
    $query->bindParam(':fullname', $data['input-fullname']);
    $query->bindParam(':birthdate', $data['input-birthdate']);
    $query->bindParam(':gender', $data['input-gender']);
    $query->execute();
    // $result_student = $query->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result_student);
    // return $result_student;
}
?>

<?php
var_dump($_POST);

if (isset($_POST)) {
    echo 'ok';
    insert_student($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-03</title>
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <form method="POST">
        <label for="Email">Email</label>
        <input type="email" placeholder="Enter your email" name="input-email">
        <label for="Gender">FullName</label>
        <input type="text" placeholder="Enter your fullname" name="input-fullname">
        <label for="Gender">Gender</label>
        <select name="input-gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <label for="Birthdate">Birthdate</label>
        <input type="date" name="input-birthdate">
        <label for="Grade-Id">Grade-Id</label>
        <input type="number" name="input-grade-id">
        <input type="submit" name="submit_form" value="Subscribe">
    </form>

</body>

</html>