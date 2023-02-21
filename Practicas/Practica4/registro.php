<?php

    //INPUT TIPO HIDEN
    $file_name = "usuarios.txt";
    $file_handle = fopen($file_name, "r") or die("Can not open file");
    $data = array();
    $index = 0;
    $data_post = null;

    

    while (!feof($file_handle)) {
        $row = fgets($file_handle);

        $row = str_replace("\r\n", "", $row);
        if ($row == "") {
            continue;
        }

        $array_tmp = explode(",", $row);

        $link= "registro.php?" .http_build_query(array('index' => $index));
        $linkRemove = "registro_CTL.php?" .http_build_query(array('index' => $index));
        array_push($data, array("nombre" => $array_tmp[0], "apellido" => $array_tmp[1],
            "correo" => $array_tmp[2], "link" => $link, "linkRemove" => $linkRemove,"index" => $index,'edit' => false));
        
            $index++;
    }

    fclose($file_handle);

    if (!empty($_GET)) {
        $data_post = $data[(int) $_GET['index']];
        $data_post['index'] = $_GET['index'];
        $data_post['edit'] = true;
    }
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
            <input type="text" name="nombre" placeholder="Nombre" id="nombre" value=<?=$data_post['nombre']?>>
        </div>

        <br>
        <div>
            <input type="text" name="apellido" placeholder="Apellido" id="apellido" value=<?=$data_post['apellido']?>>
        </div>


        <br>
        <div>
            <input type="text" name="correo" placeholder="Correo" id="correo" value=<?=$data_post['correo']?>>
        </div>

        <div>
            <input type="submit" name="enviar" id="enviar" value="Enviar">
        </div>
        <input type="hidden" name="edit" id="edit" value=<?=$data_post['edit']?>>
        <input type="hidden" name="index" id="index" value=<?=$data_post['index']?>>
    </form>
    <br>

    <table width="500" border="1">
        <thead>
            <tr>
                <th id="nombre_t">Nombre</th>
                <th id="apellido_t">Apellido</th>
                <th id="correo_t">Correo</th>
                <th id="acciones" colspan="2">Acciones</th>
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
                <th id="editarUsuario<?=$key?>"> <a href=<?=$user['linkRemove']?>>Eliminar</th>
            </tr>
            <?php } ?>
        </tbody>
    </table>


</body>

</html>