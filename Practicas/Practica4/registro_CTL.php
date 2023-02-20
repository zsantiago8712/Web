<?php


$file_name = "usuarios.txt";
$file_handle = fopen($file_name, "a+");

$data = implode(",", array($_POST['nombre'],$_POST['apellido'], $_POST['correo'])) . "\n";
fwrite($file_handle, $data);

fclose($file_handle);

header("Location: registro.php");