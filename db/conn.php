<?php 
    //Development Connection
    $host = '127.0.0.1';
    $db = 'tubes';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    //Remote Database Connection
    //$host = 'remotemysql.com';
    //$db = 'XYycwXqwd5';
    //$user = 'XYycwXqwd5';
    //$pass = 'x7YxpAGtP4';
    //$charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>