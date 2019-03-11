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

echo "<hr/>";

if(isset($_GET['numero'])){
    //Cambiar tipo de dato (Castear)
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
var_dump($numero);

echo "<h1>Tablas de multiplicar del número $numero</h1>";
$contador = 1;
while($contador<=10){
echo "<p>$numero x $contador = ".$numero*$contador."</p>";
$contador++;
}

/*
DO WHILE

ES UTIL CUANDO NECESITAMOS SE EJECUTE UNA VEZ Y DESPUÉS COMPROBAR ALGO, 
EN CASO DE QUE SEA TRUE VOLVEMOS A EJECUTAR EL BUCLE
*/

echo "<hr/>";

$age = 11;
$count = 1;
do {
   echo "<p>Tienes acceso al local privado -> ".$count."</p>";
   $count++;
} while ($age >= 18 && $count<=10);

?>