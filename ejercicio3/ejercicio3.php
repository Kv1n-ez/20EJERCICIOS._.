<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ núm1 = $ _POST ['núm1'];
        $ núm2 = $ _POST ['núm2'];
        $ núm3 = $ _POST ['núm3'];
        $ máximo = máximo ($ número1 , $ número2 , $ número3);
        echo " El número mayor es: $ max ";
    }
    ?>