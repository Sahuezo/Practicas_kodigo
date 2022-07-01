<?php
function estructuraif(){
    $n = 2; 

    if ($n == 1){
        echo "El valor es 1;";
    }else {
        echo "el valor no es 1";
    }
}
Echo estructuraif()."\n";


function NumMenor(){
    $n1 = 1590;
    $n2 = 3345;
    $n3 = 123;
    $n4 = 434; 

    $menor =min($n1, $n2, $n3, $n4);

    return $menor;

}
echo "el numero menor es:". NumMenor() . "\n";

/// Ejercicio #3  
$nombre = "fulana";
$arreglo = array( 1 ,3,5, "casa", $nombre);
$longitud =count ($arreglo);
for ($i = 0; $i<$longitud; $i++){
    echo $arreglo[$i]."\n";
}

?>