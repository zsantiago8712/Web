<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Operaciones</title>
</head>

<body>

    <form action="formularioCNT.php" method="POST" enctype="application/x-www-form-urlencoded">
        <div>
            <lable>Variable 1:</lable>
        </div>
        <br>
        <div>
            <input type="number" name="variable1" placeholder="Ingrese cualquier número" id="var1">
        </div>
        <br>
        <div>
            <labe>Tipo de Operacion</labe>
        </div>
        <div>
            <select name="operacion" id="operacion">
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicación</option>
                <option value="Division">Division</option>
            </select>
        </div>
        <br>
        <div>
            <lable>Variable 2:</lable>
        </div>
        <div>
            <input type="number" name="variable2" placeholder="Ingrese cualquier número" id="var2">
        </div>
        <div>
            <input type="submit" name="enviar" id="enviar" value="Enviar">
        </div>
    </form>

</body>

</html>