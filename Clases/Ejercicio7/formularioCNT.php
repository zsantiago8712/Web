<?php


var_dump($_POST);

if ($_POST['operacion'] == "Suma") {
    $res = $_POST['var1'] + $_POST['var2'];
    echo "Resultado = $res";
} elseif ($_POST['operacion'] == "Resta") {
    $res = $_POST['var1'] - $_POST['var2'];
    echo "Resultado = $res";
}elseif ($_POST['operacion'] == "Multicacion") {
    $res = $_POST['var1'] * $_POST['var2'];
    echo "Resultado = $res";
}elseif ($_POST['operacion'] == "Division") {
    $res = $_POST['var1'] / $_POST['var2'];
    echo "Resultado = $res";
}