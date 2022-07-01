<?php 

abstract class CocheAbstract {

public function getRuedas(){

return 4;

}

abstract public function SetPotencia( $potencia);

abstract public function getPotencia ( );

}

class Audi extends CocheAbstract {

public $marca = "Audi";

protected $potencia; 

public function setPotencia($potencia){

$this-> potencia = $potencia;

}

public function getPotencia (){

return $this -> potencia ; 

}

}

$objAudi=new Audi(); 

$ruedas = $objAudi->getRuedas(); 

$objAudi->SetPotencia(150); 

$potencia = $objAudi->getPotencia ();

echo "Mi coche". $objAudi->$marca.  "de" . $ruedas. "de ruedas".  $potencia. " de potencia.";

?>
