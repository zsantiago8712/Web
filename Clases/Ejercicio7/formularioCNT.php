<?php


var_dump($_POST);

if ($_POST['operacion'] == "Suma") {
    $res = (int)$_POST['var1'] + (int)$_POST['var2'];
    echo "\nResultado = $res";
} elseif ($_POST['operacion'] == "Resta") {
    $res = (int)$_POST['var1'] - (int)$_POST['var2'];
    echo "\nResultado = $res";
}elseif ($_POST['operacion'] == "Multicacion") {
    $res = (int)$_POST['var1'] * (int)$_POST['var2'];
    echo "\nResultado = $res";
}elseif ($_POST['operacion'] == "Division") {
    $res = (int)$_POST['var1'] / (int)$_POST['var2'];
    echo "\nResultado = $res";
}