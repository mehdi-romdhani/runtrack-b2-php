<?php


function find_all_students_grades()
{
    try {
        $user = 'root';
        $pass = '';
        $dbh = new PDO('mysql:host=localhost;dbname=lp_official', $user, $pass);
        // return 'connect';
    } catch (PDOException $e) {
        // tenter de réessayer la connexion après un certain délai, par exemple
    }

    $query = $dbh->prepare("SELECT email,fullname,name FROM student INNER JOIN grade on student.id = grade.id");
    $query->execute();
    $querry_assoc = $query->fetchALL(PDO::FETCH_ASSOC);

    return $querry_assoc;
}


find_all_students_grades();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-04</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <h1>Students Grades </h1>

    <table>
        <tr>
            <th>Email</th>
            <th>Full Name</th>
            <th>Name</th>
        </tr>

        <?php foreach (find_all_students_grades() as $find) : ?>
            <tr>
                <td><?= $find['email'] ?></td>
                <td><?= $find['fullname'] ?></td>
                <td><?= $find['name'] ?></td>
            <?php endforeach; ?>
    </table>
</body>

</html>