<?php 

function find_full_rooms(){
    try {
        $user = 'root';
        $pass = '';
        $dbh = new PDO('mysql:host=localhost;dbname=lp_official', $user, $pass);
        // return 'connect';
    } catch (PDOException $e) {
        // tenter de réessayer la connexion après un certain délai, par exemple
    }

    
}

?>