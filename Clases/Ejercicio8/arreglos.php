<?php
    $estados = array("Oxaca", "Chiapas", "Campeche", "Estado de México", "Guanajuato", "Baja California Sur", "Sonora");
    $capitales = array("Oxaca","Tuxtla Gutiérrez", "San Francisco de Campeche", "Toluca", "Guanajuato", "La Paz", "Hermosillo");
    $poblacion = array(123421325, 321730, 9361237, 123123, 1232314123);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
</head>
<table width="500" border="1">

    <thead>
        <tr>
            <th id="estados">Estado</th>
            <th id="capitales">Capital</th>
            <th id="poblacion">Población></th>
        </tr>
    </thead>
    <tbody>
        <?php
            for ($i = 0; $i < count($estados); $i++) {
        ?>
        <tr>
            <th id=<?=$estados[$i] ?>><?= $estados[$i] ?></th>
            <th id=<?=$capitales[$i] ?>><?= $capitales[$i] ?></th>
            <th id=<?=$poblacion[$i] ?>><?= $poblacion[$i] ?></th>
        </tr>
        <?php }?>
    </tbody>
</table>

<body>



</body>

</html>