<?php
    var_dump($_POST);

    // isset -> valida si una variable esta definida
    if (isset($_POST["bebida2"]) && is_array($_POST["bebida2"])) {

        echo "El usuario seleccionado: <br>";
        for ($i = 0; $i < count($_POST["bebida2"]); $i++) {
            echo "<b>" .$_POST["bebida2"][$i] . "</b>" . "<br>";
        }
    }

 