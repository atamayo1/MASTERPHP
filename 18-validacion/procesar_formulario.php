<?php
$error = 'faltan_valores';

if (!empty($_POST['name']) &&  !empty($_POST['lastname']) &&
    !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])){
    $error = 'ok';

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!is_string($name) && !preg_match("/[A-Z a-z]+/", $name)){
        $error = 'nombre';
    }
    if (!is_string($lastname) && !preg_match("/[A-Z a-z]+/", $lastname)){
        $error = 'apellidos';
    }
    if (!is_numeric($edad) && !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    if (!is_string($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    if (empty($pass) && strlen($pass)<5){
        $error = 'contraseña';
    }
}else{
    $error = 'faltan_valores';
    header("Location:index.php?error=$error");
}

if ($error != 'ok'){
    header("Location:index.php?error=$error");
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validación de formularios PHP</title>
</head>
<body>

<?php if ($error == 'ok'): ?>
    <p><?=$name?></p>
    <p><?=$lastname?></p>
    <p><?=$edad?> <?php if($edad > 9): ?> años <?php else: ?> año <?php endif; ?></p>
    <p><?=$email?></p>
<?php endif; ?>

<button><a href="index.php" style="text-decoration: none;">Volver</a></button>

</body>
</html>
