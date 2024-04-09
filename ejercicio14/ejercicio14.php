<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ texto = $ _POST [ 'texto' ];
        $ num_caracteres = strlen( $ texto );
        echo " El número de caracteres en el texto es: $ num_caracteres ";
    }
    ?>
