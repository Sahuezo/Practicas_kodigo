<?php
/** si estas herdando de mi, 
 *  a ser obligada a usar todas las 
 * funciones que están en una interfas
 * Si no cumple esta 
 *  Podemos usar más de una interfas
 * Las funciones de la interfas deben ser publicas si o si
*/
    interface Automovil{
        /* si hay una función adentro de Interface entonces 
        debe de ser una función publica */

        public function getTipo( /* Aquí adentro puede ir 
                                    un Array pero debe tener 
                                    un argumento del mismo tipo. 
                                   Pero En el otro GetTipo debe ter 
                                   el mismo tipo de info 
                                   Esto se puede usar cuando 
                                   hay estructuras repetitivas
                                 */
                                );
        public function getRudas( );

    }

        /* para heredad se usa la palabra implements*/
            class coche implements Automovil{

                 /* Es obligatorio usar las funciones que estpan 
                 en implements */

                public function getTipo(){
                    echo "coche";
                }
                public function getRuedas(){
                    echo "4";
                }
            }


        /* De Auto me puede salir 
        coches - Sinonimo : COCHE  
        m */
       


      $objCoche = new Coche();
      echo "el tipo de transporte es ";
      $objCoche->getTipo()."\n"; 
      echo "la cantidad de llantas es ";
      $objCoche->getRuedas();
    
?>