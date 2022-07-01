<?php
/*  Es un bloque de instruciones que es independiente
Pueden : Devolver un valor o no
 Se usa un identificador que se puede mandar a llamar 
 desde cualquier lugar. 
 Es un pequeño programa que no puede identifcar variables
 que esten afuera de ella. 
 Sirve para hacer más ágil el codigo. 
 Pueden hacerse desde cualquier parte del doc. 
 
 */
///DEFINICION DE LA FUNCION
#el identificador no puede llevar número
#identificiador si puede llevar guión bajo
#No se permiten palabras recervadas 
#no permite Signo de dolar($) como las variables


function Michis(){
    //Esto es una variable Local
    $suma = 5 + 2; 
    return $suma;    
}

//LLAMAR LA FUNCION : 
#Semanda con el nombre qye le pusimos a la funcion 
# Se puede usar : return
# a fuerza deve llevar Parentesis después d la palabra   
echo "La suma es = ".Michis()."\n";

function Michis2(){
    $contador= 0 ;
    $contador = $contador +1 ;
    return $contador;
}
 for ($i=1; $i <=10; $i++){
    echo Michis2()." ▲\n ";
    //echo ":) \n";
 }

?>