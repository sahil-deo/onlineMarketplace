<?php
    $db_server = "mysql:host=<yourHostName>; dbname=<yourDataBaseName>";
    $db_user = "yourUsername";
    $db_pass = "yourPassword";


    try{
       $pdo = new PDO( $db_server, $db_user, $db_pass);
       $isconn = true;

    }catch(PDOException){
        echo "<strong>error establishing connection with the database server</strong>";
        $isconn = false;
    }
?>
