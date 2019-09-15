<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validación de formularios PHP</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php
    if (isset($_GET['error'])){
        $error =  $_GET['error'];
        if ($error == 'faltan_valores'){
            echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
        }
        if ($error == 'nombre'){
            echo '<strong style="color:red">Introduce bien el nombre</strong>';
        }
        if ($error == 'apellidos'){
            echo '<strong style="color:red">Introduce bien los apellidos</strong>';
        }
        if ($error == 'edad'){
            echo '<strong style="color:red">Introduce bien la edad</strong>';
        }
        if ($error == 'email'){
            echo '<strong style="color:red">Introduce bien el correo</strong>';
        }
        if ($error == 'contraseña'){
            echo '<strong style="color:red">Introduce bien la contraseña</strong>';
        }
    }
    ?>
    <form action="procesar_formulario.php" method="post">
        <label for="name">Nombre:</label>
        <p><input type="text" name="name" pattern="[A-Z a-z]+" id="name" required="required"></p>

        <label for="lastname">Apellidos:</label>
        <p><input type="text" name="lastname" pattern="[A-Z a-z]+" id="lastname" required="required"></p>

        <label for="edad">Edad:</label>
        <p><input type="number" name="edad" id="edad"></p>

        <label for="email">Email:</label>
        <p><input type="email" name="email" required="required" id="email"></p>

        <label for="pass">Contraseña:</label>
        <p><input type="password" name="pass" required="required" minlength="5" id="pass"></p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>