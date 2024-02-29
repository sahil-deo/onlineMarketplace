<?php
    $db_server = "mysql:host=localhost; dbname=general";
    $db_user = "root";
    $db_pass = "";


    try{
       $pdo = new PDO( $db_server, $db_user, $db_pass);
       $isconn = true;

    }catch(PDOException){
        echo "<strong>error establishing connection with the database server</strong>";
        $isconn = false;
    }
?>