<?php
    $dsn = 'mysql:host=localhost;dbname=D00244954';
    $username = 'D00244954';
    $password = '2aslKKHV';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('db_error.php');
        exit();
    }
?>