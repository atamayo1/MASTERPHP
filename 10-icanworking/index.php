<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edad para trabajar</title>
    <style>
        *{
            font-family: sans-serif;
        }
        body{
            text-align: center;
            background-color: deepskyblue;
        }
        .container{
            margin-top: 20%;
        }
        h1{
            color: white;
        }
        h1.answer{
            color: white;
            animation: random 5s infinite;
        }
        @keyframes  random {
            15% { color: red; } 
            30% { color: yellow; } 
            45% { color: green; } 
            60% { color: blue; }
            75% { color: white; }  
        }
        label{
            font-size: 17px;
            color: white;
        }
        .age{
            height: 30px;
            width: 40px;
            font-size: 17px;
            border-radius: 99px;
            border: none;
            text-align: center;
        }
        .submit{
            width: 140px;
            height: 40px;
            font-size: 17px;
            border-radius: 99px;
            border: none;
            color: white;
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>¿Quieres saber si estas en edad para trabajar?</h1>
    <form action="index.php" method="post">
        <p>
            <label for="age">Ingresa tu edad:</label>
            <input type="number" name="age" class="age">
        </p>

        <input type="submit" value="Enviar edad" class="submit">
    </form>
    <?php 
    $edad1 = 18;
    $edad2 = 64;
    $edad_oficial = $_POST['age'];
    if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
        echo "<h1 class='answer' style='text-transform: uppercase;'>Esta en edad para trabajar</h1>";
    } elseif ($edad_oficial == null) {
        echo "";
    }else{
        echo "<h1 class='answer' style='text-transform: uppercase;'>No esta en edad para trabajar</h1>";
    }
    ?>
    </div>
</body>
</html>