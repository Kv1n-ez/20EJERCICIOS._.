<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ numero = $ _POST [ 'numero' ];
        echo " <h3>Tabla de multiplicar del $ numero :</h3> ";
        para ( $ i = 1 ; $ i <= 10 ; $ i ++) {
            $ resultado = $ numero * $ i ;
            echo " $ numero x $ i = $ resultado <br> ";
        }
    }
?>
