<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadores en PHP</title>
    <style>
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
  <?php
    $variable1 = 65;
    $variable2 = 33;
    echo "<h1>Operadores Aritmeticos</h1>";
    echo("Suma: ".($variable1+$variable2));
    echo("<p>Resta: ".($variable1-$variable2)."</p>");
    echo("<p>Multiplicación: ".($variable1*$variable2)."</p>");
    echo("<p>División: ".($variable1/$variable2)."</p>");
    echo("<p>El Resto de una División: ".($variable1%$variable2)."</p>");

    echo "<h1>Operadores de Incremento y Decremento</h1>";
    $year = 2019;
    $year++;
    echo "Incremento";
    echo "<h1>".$year."</h1>";
    $year--;
    echo "Decremento";
    echo "<h1>".$year."</h1>";

    echo "<h1>Operadores de Asignación</h1>";
    $edad = 24;
    echo $edad." años <br>";
    echo ($edad+=5)." años";
  ?>
</body>
</html>