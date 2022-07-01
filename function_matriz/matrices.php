
<?php
/* Lo que identifica una matriz son los corchetes [] . 
dica rangos . Matriz no es una palabra reservada.
array y range si es palabra recervada */

//$mes = array (); 
/*$mes = array ("Enero", "Feb", "Ma", "Abr","May","Jun",
              "Jul", "Ag", "Sept", "Oct", "Nov", "Dic");
*/
///$mes[1] = array ();
$mes[1] ="Enero";
$mes[2] ="Feb";           
$mes[] ="Marz";
$mes[] = "Abr";
$mes[] = "May";
$mes[] = "Jun";
$mes[] = "Jul";
$mes[] = "Ag";
$mes[] = "Sep" ;
$mes[] = "Oct";
$mes[] = "Nov";
$mes[] = "Dic";
//$alfabeto=range('a','z');

print_r ($mes);


?>