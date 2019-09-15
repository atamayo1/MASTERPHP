<?php

//Cookie se almacena en el ordenador del usuario, para almacenar datos o rastrear el comportamiento de una web.

//Crear cookie
//Estructura: setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

//Cookie básica
setcookie("micookie", "valor de mi galleta");

//Cookie con expiración -> operación (segundos*minutos*horas*dias)
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

header('Location:ver_cookies.php');

?>
