<?php 

class calcu{
    public $valor1;
    public $valor2;

    public function __construct ($parametro1, $parametro2){
    // La info que está entre parentesis se llaman argumentos.
        //Inicializando Variables
        $this->valor1=$parametro1;
        $this->valor2=$parametro2;
    }

    public function sumatoria(){
        $resultado = $this->valor1 +$this->valor2;
        return "la Suma es: ".$resultado;
    } 
    public function restar(){
        $resultado = $this->valor1 -$this->valor2;
        return "la resta es: ".$resultado;
    } 
    public function multiplicar(){
        $resultado = $this->valor1 *$this->valor2;
        return "la multiplicación es: ".$resultado;
    } 
    public function dividir(){
        $resultado = $this->valor1 /$this->valor2;
        return "la divición es: ".$resultado;
    } 
}

// Instancia de mi clase calculadora 
$objCalcu = new calcu(15, 5);
// Los Parametros son los que yo envio , lo s que yo pregunto. 
echo "El resultado de".$objCalcu->sumatoria()."\n";
echo "El resultado de".$objCalcu->restar()."\n";
echo "El resultado de".$objCalcu->multiplicar()."\n";
echo "El resultado de".$objCalcu->dividir()."\n";
//echo "La resta es:" . $objCalcu->resta(); */


?>
