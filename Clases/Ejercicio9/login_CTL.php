<?php

// session_start();
echo "HolaA";
if (!empty($_POST)) {

    if ($_POST["username"] == "admin" && $_POST["password"] == "Admin") {
        $_SESSION["user"] = $_POST["username"];
    }

}
echo "HolaA2";
// header("Location: contenido_secreto.php");