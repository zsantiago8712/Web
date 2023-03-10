<?php

if (!empty($_POST)) {
    if (!$_POST['edit']) {
        addUser($_POST);
    }else {
        editUser($_POST);
    }

}elseif (isset($_GET)) {
    removeUser($_GET['index']);
}

header("Location: registro.php");



function addUser($user)
{
    $filName = "usuarios.txt";
    $file = fopen($filName, "a+");

    $data = implode(",", array($user['nombre'], $user['apellido'], $user['correo'])) . "\n";
    fwrite($file, $data);
    fclose($file);
}


function getUsersFromFile()
{
    $fileName = "usuarios.txt";
    $file = fopen($fileName, "r");
    $data = array();
    $index = 0;

    while (!feof($file)) {
        $row = fgets($file);

        $row = str_replace("\r\n", "", $row);
        if ($row == "") {
            continue;
        }

        
        $arrayTmp = explode(",", $row);
        
        array_push($data, array("nombre" => $arrayTmp[0], "apellido" => $arrayTmp[1],
            "correo" => $arrayTmp[2], "index" => $index));
            $index ++;
    }

    fclose($file);
    return $data;
}


function editUser($editUser)
{

    $users = getUsersFromFile();
    $filName = "usuarios.txt";
    $file = fopen($filName, "w");

    foreach ($users as $key => $user) {
               
        $data = implode(",", array($user['nombre'], $user['apellido'], $user['correo']));

        if ($key == $editUser['index']) {
            $data = implode(",", array($editUser['nombre'], $editUser['apellido'], $editUser['correo']));
        }
   
        if ($key == count($users) - 1) {
            $data = "\n" . $data;
        }
        
        fwrite($file, $data);
    }
    
    fclose($file);

}

function removeUser($removeUserIndex)
{

    $users = getUsersFromFile();
    $filName = "usuarios.txt";
    $file = fopen($filName, "w");

    foreach ($users as $key => $user) {
       
        
        $data = implode(",", array($user['nombre'], $user['apellido'], $user['correo']));
        if ($key == $removeUserIndex) {
            continue;
        }
   
        fwrite($file, $data);
    }
    
    fclose($file);
}