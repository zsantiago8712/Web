<?php
    require_once("../includes/Db.php");
    $contiente = 4;

    $query = "SELECT Code, Name, Capital, HeadOfState as presidente FROM world.country WHERE continent = ?";
    $db = new Db("localhost", 'dzamora', 'dzamora', '217924', '3306');
    $db->connect();
    $rows = $db->prepare($query, $contiente);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Código</th>
            <th>País</th>
            <th>Capital</th>
            <th>Presidente</th>
        </tr>

        <tr>
            <? foreach ($rows as $row) { ?>
            <td><?= $row['Code']?></td>
            <td><?= $row['Name']?></td>
            <td><?= $row['Capital']?></td>
            <td><?= $row['presidente']?></td>
            <? } ?>
        </tr>
    </table>
</body>

</html>