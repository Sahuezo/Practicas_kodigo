<?php
    /*class DatoMateria {

        public $miDocente = "Licda Cornejo= ";
        public $miMateria = "Lenguaje";

        public function datos(){
            return "{$this->miDocente} {$this->miMateria}";
        }
    }

    $objDatosMateria = new DatoMateria();

    echo $objDatosMateria->datos();*/

/////// Ejercicio 2

class Persona {
    public $nombre, $apellido;

    public function __construct ($firsName, $lastName) {
        $this->nombre = $firsName;
        $this->apellido = $lastName;
    }

    public function __toString(){
        return $this->nombre. " ".$this->apellido;
    }

}

$objPerona1 = new Persona("Rosario", "Contreras");

echo $objPerona1;

?>

