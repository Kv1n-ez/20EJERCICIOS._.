<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ edad = $ _POST [ 'edad' ];
        si ( $ edad >= 18 ) {
            echo " Eres mayor de edad. ";
        } demás {
            echo " Eres menor de edad. ";
        }
    }
?>
