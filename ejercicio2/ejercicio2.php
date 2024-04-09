<?php
    si ( $ _SERVER ["REQUEST_METHOD"] == " POST ") {
        $ núm1 = $ _POST ['núm1'];
        $ núm2 = $ _POST ['núm2'];
        $ op = $ _POST ['op'];
        cambiar ( $ op ) {
            caso  'suma' :
                $ resultado = $ número1 + $ número2 ;
                romper ;
            caso  'resta' :
                $ resultado = $ número1 - $ número2 ;
                romper ;
            caso  'multiplicación' :
                $ resultado = $ núm1 * $ núm2 ;
                romper ;
            caso  'división' :
                si ($ num2 != 0) {
                    $ resultado = $ núm1 / $ núm2 ;
                } demás {
                    $ resultado = "División por cero no permitida";
                }
                romper ;
            por defecto :
                $ resultado = "Operación no válida";
                romper ;
        }
        echo "Resultado: $ resultado";
    }
?>
