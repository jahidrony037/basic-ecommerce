<?php

session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username= $_POST['username'];
    $password = $_POST['password'];

    $user = User::authenticateUser($username,$password);
    if($user){
        $_SESSION['user']= $user;
        header('Location: index.php');
    }else {
        echo "Invalid Credentials";
    }


}