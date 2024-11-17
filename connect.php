<?php
    $dsn = 'mysql:host=localhost;dbname=u627652858_barbershop_db';
    $user = 'u627652858_myuser';
    $pass = 'Proksi55!'; 
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );
    try
    {
        $con = new PDO($dsn, $user, $pass, $option);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Volim te !';
    }
    catch(PDOException $ex)
    {
        echo "NE POVEZUJE SE SA BAZOM PODATAKA! " . $ex->getMessage();
        die();
    }
?>