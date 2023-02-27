<?php 

    var_dump($_SESSION);
    if (isset($_SESSION["user"])) {
        echo "Usuario: " . $_SESSION["user"] . "Validad\n";
    }else {
        echo "Usuario: " . $_SESSION["user"] . "Invalido\n";
    }