<?php


$file_name = "usuarios.txt";
$file_handle = fopen($file_name, "a+");

$data = implode(",", $_POST);
fwrite($file_handle, $data);

fclose($file_handle);