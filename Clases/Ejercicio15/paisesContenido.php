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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <div class="table-responsive">
        <table class="table caption-top">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">País</th>
                <th scope="col">Capital</th>
                <th scope="col">Presidente</th>
            </tr>

            <? foreach ($rows as $row) { ?>
            <tr>
                <td><?= $row['Code']?></td>
                <td><?= $row['Name']?></td>
                <td><?= $row['Capital']?></td>
                <td><?= $row['presidente']?></td>
            </tr>
            <? } ?>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </div>

</body>

</html>