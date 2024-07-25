<?php
session_start();
require_once '../../database/database.php';
require_once '../../models/user.model.php';
if($_SERVER['REQUEST_METHOD' ] == 'POST'){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $user = accountExist($email);
    if(count($user) > 0){
        if(password_verify($password,$user['password'])){
            $_SESSION['$user'] = $user;
            header('location:/');
        }else{
            echo'Password is not correct';
        }
    }else{
        echo 'No user found';
    }
}

// $user[3] because in out table userEmail stay at index 3