<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ año = $ _POST [ 'año' ];
        if (( $ año % 4 == 0 && $ año % 100 != 0 ) || $ año % 400 == 0 ) {
            echo " $ año es un año bisiesto. ";
        } demás {
            echo " $ año no es un año bisiesto. ";
        }
    }
    ?>
