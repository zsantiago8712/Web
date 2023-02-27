<?php

session_start();
if (!empty($_POST)) {

    if ($_POST["username"] == "admin" && $_POST["password"] == "Admin") {
        $_SESSION["user"] = $_POST["username"];
        echo "sii";
    }else {
        echo "nOO";
    }
    

}
// header("Location: contenido_secreto.php");