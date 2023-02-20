<?php

    $file_name = "usuarios.txt";
    $file_handle = fopen($file_name, "r") or die("Can not open file");
    $data = array();

    while (!feof($file_handle)) {
        $row = fgets($file_handle);
        $array_tmp = explode(",", $row);
        $link = http_build_query(array('user' =>
            array("nombre" => $array_tmp[0], "apellido" => $array_tmp[1], "correo" => $array_tmp[2])));

        array_push($data, array("nombre" => $array_tmp[0], "apellido" => $array_tmp[1],
            "correo" => $array_tmp[2], "link" => $link));
    }

    fclose($file_handle);

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4</title>
</head>

<body>

    <form action="registro_CTL.php" method="POST" enctype="application/x-www-form-urlencoded">
        <div>
            <label>Nombre</label>
        </div>
        <br>
        <div>
            <input type="text" name="nombre" placeholder="Nombre" id="nombre" value=<?=$_GET['user']['nombre']?>>

        </div>

        <br>
        <div>
            <input type="text" name="apellido" placeholder="Apellido" id="apellido"
                value=<?=$_GET['user']['apellido']?>>
        </div>


        <br>
        <div>
            <input type="text" name="correo" placeholder="Correo" id="correo" value=<?=$_GET['user']['correo']?>>
        </div>

        <div>
            <input type="submit" name="enviar" id="enviar" value="Enviar">
        </div>

    </form>
    <br>

    <table width="500" border="1">
        <thead>
            <tr>
                <th id="nombre_t">Nombre</th>
                <th id="apellido_t">Apellido</th>
                <th id="correo_t">Correo</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data as $key => $user) {
            ?>
            <tr>
                <th id=<?$user['nombre']?>><?=$user['nombre']?></th>
                <th id=<?$user['apellido']?>><?=$user['apellido']?></th>
                <th id=<?$user['correo']?>><?=$user['correo']?></th>
                <th id="editarUsuario<?=$key?>"> <a href=<?=$user['link']?>>Editar</th>
            </tr>
            <?php } ?>
        </tbody>
    </table>


</body>

</html>