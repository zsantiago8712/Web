<?php

    $carreras = array(
        array("Clave" => 31231, "Nombre" => "Ing. Telecom"),
        array("Clave" => 15612, "Nombre" => "Ing. Electronica"),
        array("Clave" => 31231, "Nombre" => "Ing. Mecatronica"),
        array("Clave" => 21093, "Nombre" => "Ing. Industrial"),
        array("Clave" => 93193, "Nombre" => "Ing. Biomedia")
    );
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Ejerciio 6</h1>
    <br>
    <form action="formulario_CTL.php" name="POST" enctype="application/x-www-form-urlencoded">
        </div>
        <label>Nombre:</label>
        <input type="text" name="nombre" placeholder="Ingrese su nombre" id="nombre">
        <br>
        <label>Apellido:</label>
        <input type="text" name="apellido" placeholder="Ingrese su apellido" id="apellido">
        <br>
        <label>Carrera:</label>
        <select name="carreras" id="carreras">

            <option value="0"> Seleccione una carrera</option>
            <?php
                foreach ($carreras as $carrera) {?>
            <option value="<?= $carrera['Clave']?>">
                <?= $carrera['Nombre']?>
            </option>
            <?php }?>

        </select>
    </form>
</body>

</html>