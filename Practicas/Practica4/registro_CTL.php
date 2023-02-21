<?php
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
    $file = fopen($filName, "a+");

    foreach ($users as $key => $user) {
        
        if ($key == $editUser['index']) {
            addUser($editUser);
        }else {
            addUser($user);
        }
    }
    

}



if (key_exists("index", $user)) {
    addUser($_POST);
}else {
    editUser($_POST);
}

header("Location: registro.php");