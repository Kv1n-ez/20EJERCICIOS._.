<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ longitud = $ _POST [ 'longitud' ];
        $ caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+[]{}|;:,.<>?' ;
        $ contraseña = '' ;
        para ( $ i = 0 ; $ i < $ longitud ; $ i ++) {
            $ índice = rand( 0 , strlen( $ caracteres ) - 1 );
            $ contraseña .= $ caracteres [ $ índice ];
        }
        echo " Contraseña generada: $ contraseña ";
    }
    ?>
