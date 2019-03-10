<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de datos PHP</title>
    <style>
        *{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Tipos de datos en el Master de PHP</h1>
    <?php
        $entero = 24;
        $decimal = 2.4;
        $texto = "Anthony $".$entero; 
        $verdadero = true;
        $nulo = null;

        echo $texto.'<br>';
        echo gettype($nulo).'<br>';

        //Debuguear
        $mi_nombre[] = "Anthony Tamayo Ortega";
        $mi_nombre[] = "Anthony Tamayo Ortega";
        var_dump($mi_nombre);
    ?>
</body>
</html>