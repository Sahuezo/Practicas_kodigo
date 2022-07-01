<?php
//esto es un ejemplo de concateción de cadenas.
class MiMensaje {

    function añadir_algo(&$cadena){
        $cadena .= "agrevada mi cadena dos";

    }
}

$objMiMensaje = new MiMensaje();
$mitexto = 'Buenas tardes,';
$objMiMensaje ->añadir_algo($mitexto);

echo $mitexto

/* Con esto se puede regular el mensaje en relación 
entre la hora del sistema , es decir 
que aparezca buenos días, buenas tardes y buas noches 
en relación a la hora del sistema - 
>> otro ejemplo :  poner el nombre de la persona después 
que realizó una acción específica. 
Por ejemplo:  Gracias por tu compra , marta. */

?>