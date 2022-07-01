<?php
/* Encapsulamiento : Hacer bloque de cod. que va a estar dentro de {} llaves . 
REcordar : No se puede usar lo mismo que la palabra reservadas :class 
 # se pueden declarar variables dentro de la misma linea

 El constructor (__construct) tiene la función de: 
 #Inicializar variablescaptar información del cliente 
 #Para pedir información del usuario o una función para pedir info del server. 
 
 Los argumentos van dentro de los parentesis después del constructor. 
 #Parametros son los que coloca el usuario en la linea de la Instancia!
 
*/
/*class array_sort{
    protected $ordenar;
    public function __construct(array $order){
    $this->ordenar = $order;
    }
    public function ordenando(){
    $orden = $this->ordenar;
    sort($orden);
    return $orden;
    }
    }
    $objOrden = new array_sort(array(-12, 45, 123, -118, 0, 7));
    print_r($objOrden->ordenando())."\n";
*/

class MiMensaje{

    public $mensaje = "Hola a todos, yo soy";

    public function minombre($nombre, $positivo){
        return $this->mensaje.$nombre.$positivo;
    }
}

    $objMensaje = new MiMensaje ();
    echo $objMensaje ->minombre(" Beatriz");


?>
