<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables en php</title>
    <style>
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
    // Una variable es un contenedor de información , puedo guardar cualquier dato dentro de ella
    // string, number, boolean
    $mi_primera_variable = "Hola Mundo desde una variable en PHP";
    $numero = 24;
    $verdadero = true;
    $numero = 84;
    echo "<em>".$mi_primera_variable."</em><br><br>";
    echo $numero." es porque nos muestra el ultimo valor declarado";
    ?>
</body>
</html>