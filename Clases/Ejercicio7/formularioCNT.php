<?php


var_dump($_POST);

if ($_POST['operacion'] == "Suma") {
    $res = (int)$_POST['variable1'] + (int)$_POST['variable2'];
    echo "\n$_POST[0] + $_POST[2] = $res";
} elseif ($_POST['operacion'] == "Resta") {
    $res = (int)$_POST['variable1'] - (int)$_POST['variable2'];
    echo "\n$_POST[0] - $_POST[2] = $res";
}elseif ($_POST['operacion'] == "Multicacion") {
    $res = (int)$_POST['variable1'] * (int)$_POST['variable2'];
    echo "\n$_POST[0] * $_POST[2] = $res";
}elseif ($_POST['operacion'] == "Division") {
    $res = (int)$_POST['variable1'] / (int)$_POST['variable2'];
    echo "\n$_POST[0] / $_POST[2] = $res";
}