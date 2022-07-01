<?php
/*La diferencia con while y Do-While es que
while primero pregunta y luego deja pasar.
do-while primer deja pasar y luego hace la preugnta. 

Adentro del While hay que poner el contador. 

En While simple, el contador se pone al final.
En Do-While el contador se pone al inicio. antes de poner el while
en una Do-While se pone el While adentro y ahí 
se ejecuta la pregunta de evaluación. 
En el While va una pregunta, una evaluación que se repite en bucle
todas las veces que dice la sifra de la variable.

 
*/

 $estudiantes = 10;
do {
    echo "\n entran".$estudiantes;
    $estudiantes--;
} while ($estudiantes > 0);

// "un igual" es de asignación . Dos iguales "==" son de comparación. 


?>