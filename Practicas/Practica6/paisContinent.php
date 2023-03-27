<?php
    require_once("../../Clases/includes/Db.php");
    
    $db = new Db("localhost", 'dzamora', 'dzamora', '217924', '3306');
    $db->connect();

    
    $contients =$db->query("SELECT * FROM world.continent");
    echo "holaa";
    if (isset($_POST['id_continent'])) {
        $query = "SELECT Code, Name, Capital, HeadOfState as presidente FROM world.country WHERE continent = ?";
        $rows = $db->prepare($query, $_POST['id_continent']);
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>

    <div>
        <form action="paisContinent.php" method="POST" enctype="application/x-www-form-urlencoded">
            <div>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                    name="id_continent">
                    <option selected>Select a continent</option>
                    <? foreach ($contients as $contient) { ?>
                    <option value="<?= $contient['id_continent'] ?>"> <?= $contient['continent'] ?> </option>
                    <? }?>
                </select>
            </div>
            <div>
                <input type="submit" name="enviar" id="enviar" value="Enviar">
            </div>

        </form>
    </div>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>