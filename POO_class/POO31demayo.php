
<?php
    class Calculadora{

        public static function sumar($num1, $num2){
            $resultado = $num1 + $num2;
            return $resultado;
        }

        public static function restar($num1, $num2){
            $resultado = $num1 - $num2;
            return $resultado;
        }

        public static function multiplicar($num1, $num2){
            $resultado = $num1 * $num2;
            return $resultado;
        }

        public static function dividir($num1, $num2){
            $resultado = $num2 != 0 ? $resultado= $num1 / $num2 : "No se puede dividir entre cero";
            return $resultado;
        }
    }

    $n1 = 10;
    $n2 = 0;

    echo "\nLa resta es: ".Calculadora::sumar($n1, $n2);
    
    echo "\nLa resta es: ".Calculadora::restar($n1, $n2);
    
    echo "\nLa multiplicar es: ".Calculadora::multiplicar($n1, $n2);
   
    echo "\nLa división es: ".Calculadora::dividir($n1, $n2);

?>

