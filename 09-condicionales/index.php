<?php 
//Condicionales

//Ejemplo 1
$color = "rojo";
if ($color == "rojo") {
    echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>"."El color es rojo"."</h1>";
} else {
    echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>El color no es rojo</h1>";
}

//Ejemplo 2
$year = 2019;
if ($year == 2019) {
   echo "<p style='font-family: sans-serif; text-transform: uppercase;'>Estamos en el 2019</p>";
} else {
   echo "<p style='font-family: sans-serif; text-transform: uppercase;'>No estamos en el 2019</p>";
}

//Ejemplo 3
$dia = 6;
switch ($dia) {
    case '1':
        echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>Hoy es Lunes</h1>";
        break;
    case '2':
        echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>Hoy es Martes</h1>";
        break;  
    case '2':
        echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>Hoy es Miércoles</h1>";
        break;   
    case '3':
        echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>Hoy es Jueves</h1>";
        break;
    case '4':
        echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>Hoy es Viernes</h1>";
        break;
    default:
        echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>Hoy es Fin de Semana</h1>";
        break;
}

//Ejemplo 4
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 24;
if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>Esta en edad para trabajar</h1>";
} else {
    echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>No esta en edad para trabajar</h1>";
}

//Ejemplo 5
goto ejecuta_aqui;
echo "<h3>Intrucciones 1</h3>";
echo "<h3>Intrucciones 2</h3>";
echo "<h3>Intrucciones 3</h3>";
echo "<h3>Intrucciones 4</h3>";

ejecuta_aqui:
echo "<h1 style='font-family: sans-serif; text-transform: uppercase;'>Me he saltado 4 echos</h1>";

?>
