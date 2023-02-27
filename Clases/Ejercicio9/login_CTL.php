<?php


if (!empty($_POST)) {


    if ($_POST["username"] != "admin" || $_POST["password"] != "Admin") {
        header("Location: login.php");
        exit();
    }
    
    session_start();
    $_SESSION["user"] = $_POST["username"];
    header("Location: contenido_secreto.php");
}