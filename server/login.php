<?php
    require_once '../helpers/connection.php';
    $login = $_POST['login'];
    $password = $_POST['password'];

    $usersCollection = $database->users;
        
    $user = $usersCollection->findOne(['login' => strval($login)]);

    if ($user && $user['password'] == $password) {   
        session_start(); 
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;

        header('Location: http://localhost/');
    }
?>