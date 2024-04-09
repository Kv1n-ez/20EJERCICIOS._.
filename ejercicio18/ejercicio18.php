<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ correo electrónico = $ _POST [ 'correo electrónico' ];
        si (filter_var ( $ correo electrónico , FILTER_VALIDATE_EMAIL )) {
            echo " El correo electrónico $ email es válido. ";
        } demás {
            echo " El correo electrónico $ email no es válido. ";
        }
    }
    ?>
