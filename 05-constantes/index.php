<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constantes en PHP</title>
    <style>
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
    // Sus datos no pueden ser modificados una vez se definen
        define('nombre','Anthony Tamayo Ortega');
        define('web','https://www.atomi.com');
        echo '<h1>'.nombre.'</h1>';
        echo '<h1>'.web.'</h1>';
    ?>
</body>
</html>