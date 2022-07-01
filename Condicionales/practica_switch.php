<?php
/*
$nombre = "Juana"; 
$apellido ="Aguilar"; 
$profesion="desarrollador web\n";
Echo "mi nombre es:" .$nombre. "\napellido:".$apellido."\nme dedico a programar"
*/

//// NOTAS: 
/* el switch navega entre todas las opciones 
ooara saber cual se parece a la expresión 
Switch incluye una expresión de evaluación.*/

/////---> Ejercició1  

$var1 = 7;
$var2 = 5;
switch ($var1+$var2) {
	case 10:
		echo "no es 10";
		break;
	case 13:
		echo "soy 13";
		break;
	default:
		echo "no se encontró";
		break;
    } 

/////---> Sintaxis alternativa:
/* por lo general las llaves {} se transforman en dos 
puntos -->:  y el signo de ? se transforma en el switch */

$n1=8;
$n2=3;
$mayor = ($n1>$n2) ? $n1 : $n2;
echo "\nmi numero mayor es ".$mayor; 

echo "\n";

$acceso = true; 
$msg = ($acceso== true)? "Welcome":"Wrong Pass";
echo $msg; 


////-->  Ejercicio 1 creado por mí 
/* En la tienda departamental la ropa está a precio regular
 y los electrodomésticos estan con el 25% de descuento. 
 Evaluar la compra del cliente para 
 que reciba el descuento adecuado */
/*$ropa=700; 
$electro=900; 

//$tu_compra = $ropa;
$tu_compra = $electro;

switch ($tu_compra) {
	case $electro:
		echo "\ntu descuento es: ".$electro*0.25;# code...
		break;

	case $ropa:
		echo "\nDisfruta tu ropa total ".$ropa*10;
		break;

	default:
		echo "\nNo se encontró valor";
		break;
}*/

//// Ejercicio 2 NOtA:(dentreo de un switch si puede ir un IF)

$dias = "Martes";

	switch ($dias){
		case "Lunes";
			echo "\nhoy ni la gallina ponen";
			break;
		case "Martes";
			echo "\nni te cases ni te embarques";
			break;
		case "Miercoles";
			echo "\nhoy se casa la patrona";
			break;
	}
?>

