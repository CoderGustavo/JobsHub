<?php

include_once("../controller/userController.php");

$user = new userController();
$userLogged = $user->login($_POST["user"], $_POST["password"]);
$userLogged = json_decode($userLogged);

session_start();

if($userLogged->error){
    $_SESSION["error"] = "Credenciais incorretas!";
    header("Location: ../../login.php");
}else{
    $_SESSION["user"] = $userLogged;
    header("Location: ../../index.php");
}