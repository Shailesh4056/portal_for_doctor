<?php

session_start();

$username = $_POST["username"];
$error = "username/password incorrect";

if($username == 1"){
    $_SESSION["username"] = $username;
    header("location: homepage.php"); //send user to homepage, for example.
}else{
    $_SESSION["error"] = $error;
    header("location: login.php"); //send user back to the login page.
}

?>
