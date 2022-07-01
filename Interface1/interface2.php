<?php
interface Encende  {

}
/* las fucniones deben ser : declaradas 
 las funciones deben ser de tipo publica 
 Las funciones deben ir implementadas talcual, es decir
  sin cologar más argumentos. 
  */
  
class Foco implements Encendible {
    public function encender (){
        echo "Se encendió el foco";
    }
    public function apagar () {

    }

}
 
$objFoco = new Foco ();

?>