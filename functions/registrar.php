<?php

include_once("../controller/userController.php");

$user = new userController();
$userRegistered = $user->register($_POST["nome"], $_POST["email"], $_POST["cpf"], $_POST["password"], $_POST["repeated-password"]);
$userRegistered = json_decode($userRegistered);

if($userRegistered->success){
    echo $_POST["email"];
    echo $_POST["password"];
    $userLogged = $user->login($_POST["email"], $_POST["password"]);
    $userLogged = json_decode($userLogged);
    
    session_start();

    if($userLogged->error){
        $_SESSION["error"] = "Credenciais incorretas!";
        header("Location: ../../login.php");
    }else{
        $_SESSION["user"] = $userLogged;
        header("Location: ../../index.php");
    }
}
