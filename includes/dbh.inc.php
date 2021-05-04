<?php 
    // Development Connection
    // $host = '127.0.0.1';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';

    //Remote Database Connection
    $host = 'cs2410-web01pvm.aston.ac.uk';
    $db = 'u_190131063_db';
    $user = 'u-190131063';
    $pass = 'aTnarBrzAnALxKP';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
?>


