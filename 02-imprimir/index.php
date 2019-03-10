<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master en PHP Imprimir</title>
    <style>
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Master en PHP <?php echo "<em>echo para imprimir en pantalla</em>"; ?></h1>
    <?php
        echo "<h3>Listado de mascotas</h3>";
        echo "<ul>"
            ."<li>Perro</li>"
            ."<li>Gato</li>"
            ."<li>Caballo</li>"
            ."</ul>";
        echo "<p>Codigo php perfecto con echo</p>";
    ?>
</body>
</html>