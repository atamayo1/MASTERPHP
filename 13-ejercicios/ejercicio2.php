<?php

/* 
Escribir un script que nos muestre todos los numeros pares que hay de 1 al 100
*/
echo "<h1>Estos son los numeros pares del 1 al 100</h1>";
for($numero = 1; $numero <= 100; $numero++){
    
    if($numero%2 == 0){
        echo "$numero </br>";
    }
}

?>