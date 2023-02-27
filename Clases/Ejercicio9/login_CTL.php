<?php


if (!empty($_POST)) {

    if (!$_POST["username"] == "admin" || !$_POST["password"] == "Admin") {
        echo "Usuario: " . $_POST["username"] . " Invalido\n";
        exit();
    }
    
    session_start();
    $_SESSION["user"] = $_POST["username"];

}
header("Location: contenido_secreto.php");