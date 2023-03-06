<?php
    $dsn = 'mysql:host=localhost;dbname=D00244954';
    //This code should be removed for the final build
    $host = $_SERVER['HTTP_HOST'];
    if($host == "localhost"){
        $username = 'root';
        $password = '';
    }
    else{
        $username = 'D00244954';
        $password = '2aslKKHV';
    }

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('db_error.php');
        exit();
    }
?>