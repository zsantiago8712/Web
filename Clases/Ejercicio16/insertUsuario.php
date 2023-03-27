<?php
require_once("../../Clases/includes/Db.php");

$db = new Db("localhost", 'dzamora', 'dzamora', '217924', '3306');
$db->connect();

$data = array("omar.ugalde", "omar", "contra", "omar@gmail.com");
$db->insert("INSERT INTO dzamora.usuarios id_ususario, usuario, nombre, password, correo;", $data);