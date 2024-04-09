<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ nombre = $ _POST [ 'nombre' ];
        $ ganador = rand( 0 , 1 );
        si ( $ ganador ) {
            echo " ¡Felicidades, $ nombre ! ¡Has ganado! ";
        } demás {
            echo " Lo siento, $ nombre . Mejor suerte la próxima vez. ";
        }
    }
    ?>
