<?php

include './init.php';

$username = null;
$password = null; 
if(!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = trim(strip_tags($_POST["email"]));;
    $password = trim(strip_tags($_POST["password"]));;

    $query = $connection->prepare("SELECT `id` FROM `users` WHERE `email` = ? and `password` = PASSWORD(?)");
    $query->bind_param("ss", $email, $password);
    $query->execute();
    $query->bind_result($userid);
    $query->fetch();
    $connection->close();
    
    if(!empty($userid)) {
        $_SESSION["authenticated_user"] = $userid;
        header('Location: dashboard.php');
    }
    else {
        header('Location: login.php');
    }
    
} else {
    header('Location: login.php');
}