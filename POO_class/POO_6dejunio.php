<?php 
class autos {
	public $color;
	public $marca;
	public $canntLlantas; 
}

$objAutos = new Autos ();
$objAutos->color = "Azul"; 
$objAutos->marca= "Toyota";
$objAutos->cantLlantas = "4"; 

/* En este caso no pasamos por el constructor */ 
echo "color del auto es :".$objAutos->color;
echo "\nLa marca es:".$objAutos->marca;  
echo "\nla cantidad de llamatas es:".$objAutos->cantLlantas;
/* Se accede sin necesidad de crear una function
Se puede acceder directamente a las variables. 
esta opción raramente se usa */


?>