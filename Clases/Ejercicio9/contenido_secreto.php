<?php 

    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit();
    }

    echo "Usuario: " . $_SESSION["user"] . " Valido\n";
    <a href="logout.php"> Cerrar sesion</a>;