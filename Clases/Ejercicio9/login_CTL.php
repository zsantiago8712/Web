<?php

session_start();
if (!empty($_POST)) {

    var_dump($_POST);
    if ($_POST["username"] == "admin" && $_POST["password"] == "Admin") {
        $_SESSION["user"] = $_POST["username"];
        var_dump($_SESSION);
        echo "SIII";
    }else {
        echo "NOO";
    }

}
header("Location: contenido_secreto.php");