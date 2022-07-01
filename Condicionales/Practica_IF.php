<?php

// Practicando IF  ELSE-IF 
/*NOTA: 
La estructura de control if puede usarse para 
comprar dos valores y obtener una respuesta
falsa o positiva*/

///////////////// EJERCICIO 1 
/*
 $sofia= 15;
 $beatriz = 70;
if ($sofia <= $beatriz ){
    echo "Sofía tiene menos que Beatriz"; 
}elseif($sofia > $beatriz) {
    echo "Sofia tiene mas letras";
} */

//////////// EJERCICIO 2 - PONER LA FECHA -  
/*$dia_ingles= date('l \t\h\e jS');

echo $dia_ingles; */

//////////// EJERCICIO 3 - "Compra más !!" 

/*$compra ="90.50";

if ($compra<30 ) {
    echo "\n Tu compra es de €".$compra.' compra más no seas tacaño, sino tendré que cobrarte
    los abusibos 30 euros en gastos de envío';
} elseif ($compra>=30 && $compra<=90) {
    echo "\nMuy bien! Tu compra es de € ".$compra.' si compras 20.50 más tendrás el envío gratis!!';
    # code...
} elseif ($compra >= 90) {
    echo "\nTu compra es de: ".$compra.' tendrás los gastos de envío son gratis';
    # code...
}*/
//////////// EJERCICIO 4 - IF Sintaxis Alternativa
/*$sofia=5;
$beat=6;
if( $sofia>=$beat): 
        echo "evaluación 1";
     elseif($sofia<=$beat):
        echo "evaluación 2"; 
     else :
        echo "evlaua final";
     endif */
//////////// EJERCICIO 5 - Funcion IF- Peradores ternarios en variables. 
/* Si permite usar operadores ternarios en las variables, 
Especialmente si se trata de una operación simple */
/* Evaluar si la cantidad de alumos es multiplo de 5 y
lanzar un mensaje que indique la respuesta.  */ 
  
$total_estudents= 43;
$evaluacion = $total_estudents % 5 == 0 ? $total_estudents: " No se puede crear grupos";
$sentencias= $evaluacion === 0 ? $evaluacion :"\nse pueden crear ".$total_estudents/5 ;

echo "Son ".$total_estudents.$evaluacion." estudiantes".$sentencias." grupos"


?>
