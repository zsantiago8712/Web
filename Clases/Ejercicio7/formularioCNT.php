<?php




if ($_POST['operacion'] == "Suma") {
    $res = (int)$_POST['variable1'] + (int)$_POST['variable2'];
    echo $_POST['variable1'] . "+" . $_POST['variable2'] . "= $res";
} elseif ($_POST['operacion'] == "Resta") {
    $res = (int)$_POST['variable1'] - (int)$_POST['variable2'];
    echo $_POST['variable1'] . "-" . $_POST['variable2'] . "= $res";
}elseif ($_POST['operacion'] == "Multiplicacion") {
    $res = (int)$_POST['variable1'] * (int)$_POST['variable2'];
    echo $_POST['variable1'] . "*" . $_POST['variable2'] . "= $res";
}elseif ($_POST['operacion'] == "Division") {
    $res = (int)$_POST['variable1'] / (int)$_POST['variable2'];
    echo $_POST['variable1'] . "/" . $_POST['variable2'] . "= $res";
}