<?php

/* BUCLE WHILE
Estructura de control que itera o repite la ejecución de una serie de instrucciones
tantas veces como sea necesario, En base a una condición.

while(condiciones){
    bloque de instrucciones
    otra instrucción
}

*/
$numero = 0;

while($numero <= 100){

    if($numero == 100){
        echo "$numero";
    }else{
        echo "$numero, ";
    }
    
    $numero++;
}

?>