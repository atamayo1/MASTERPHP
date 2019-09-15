<?php

//Para mostrar las cookies se debe usar $_COOKIE

if (isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "No existe la cookie";
}

if (isset($_COOKIE['unyear'])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo "No existe la cookie";
}

?>
<a href="crear_cookies.php">Crear cookies</a>
<a href="borrar_cookies.php">Borrar cookies</a>
