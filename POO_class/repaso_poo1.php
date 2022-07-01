<?php
/* MEtodo es  = Función  */
class Animal{
    
    public $nombre;
    public $ecosistema;
    public $comida; 

    function tipo_de_animal(){
        echo "el animal es mamifero, infibio , acuatico\n ";
    }
    function se_reproducen(){
        echo "Todos se reproducen por:\n";
    }
    function donde_vive () {
        echo "Le gusta vivir en;\n" ;
    }
}

class mamifero extends Animal{
    function mamifero_volador(){
        echo "El murcielago";
    }
    function mamifero_acuatico(){
        echo "es una ballena";
    } 
}
class anfibio extends Animal {
    function rana(){
        echo "tu super poder es saltar";
    }
    function sapo(){
        echo "esto es un sapo y salta";
    }
}
///// INSTANCIAS /////
$objanfibio = new anfibio ();
$objmamifero = new mamifero ();
#---------------------------------#
// Las instancias mandan a llamar la funcion . 
$objanfibio->donde_vive();

$objanfibio->sapo();
echo "\n";
$objmamifero->mamifero_acuatico();
echo "\n";
$objmamifero->se_reproducen ();
?>