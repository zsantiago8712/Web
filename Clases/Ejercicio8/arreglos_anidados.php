<?php
    $estados = array(
        array("estado" => "Oxaca", "capital" => "Oxaca", "poblacion" => 123421325),
        array("estado" => "Chiapas", "capital" => "Tuxtla Gutiérrez", "poblacion" => 321730),
        array("estado" => "Campeche", "capital" => "San Francisco de Campeche", "poblacion" => 9361237),
        array("estado" => "Estado de México", "capital" => "Toluca de Lerdo", "poblacion" => 123123),
        array("estado" => "Guanajuato", "capital" => "Guanajuato", "poblacion" => 932740972),
        array("estado" => "Baja California Sur", "capital" => "La Paz", "poblacion" => 432987432),
        array("estado" => "Sonora", "capital" => "Hermosillo", "poblacion" => 98743223),

    );

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
</head>

<body>

    <table width="500" border="1">

        <thead>
            <tr>
                <th id="estados">Estado</th>
                <th id="capitales">Capital</th>
                <th id="poblacion">Población</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($estados as $key => $estado) {
            ?>
            <tr>
                <th id=<?=$estado['estado']?>><?=$estado['estado']?></th>
                <th id=<?=$estado['capital']?>><?=$estado['capital']?></th>
                <th id=<?=$estado['poblacion']?>><?=$estado['poblacion']?></th>
            </tr>
            <?php } ?>
        </tbody>
    </table>



</body>

</html>