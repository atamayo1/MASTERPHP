<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario en PHP</title>
    <style>
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Formulario en PHP POST</h1>
    <form action="recibir.php" method="post">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>

        <p>
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido">
        </p>

        <input type="submit" value="Envio de datos">
    </form>

    <h1>Formulario en PHP GET</h1>
    <form action="recibir.php" method="get">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>

        <p>
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido">
        </p>

        <input type="submit" value="Envio de datos">
    </form>
</body>
</html>