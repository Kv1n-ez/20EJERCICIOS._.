<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ temp = $ _POST [ 'temp' ];
        $ de = $ _POST [ 'de' ];
        $ a = $ _POST [ 'a' ];
        si ( $ de == 'celsius' && $ a == 'fahrenheit' ) {
            $ resultado =( $ temp * 9/5 )+ 32 ;
            echo " $ temp °C = $ resultado °F ";
        } elseif ( $ de == 'fahrenheit' && $ a == 'celsius' ) {
            $ resultado = ( $ temp - 32 ) * 5 / 9 ;
            echo " $ temp °F = $ resultado °C ";
        } elseif ( $ de == 'celsius' && $ a == 'kelvin' ) {
            $ resultado = $ temperatura + 273,15 ;
            echo " $ temp °C = $ resultado K ";
        } elseif ( $ de == 'kelvin' && $ a == 'celsius' ) {
            $ resultado = $ temperatura - 273,15 ;
            echo " $ temp K = $ resultado °C ";
        } elseif ( $ de == 'fahrenheit' && $ a == 'kelvin' ) {
            $ resultado = ( $ temp - 32 ) * 5 / 9 + 273,15 ;
            echo " $ temp °F = $ resultado K ";
        } elseif ( $ de == 'kelvin' && $ a == 'fahrenheit' ) {
            $ resultado = ( $ temp - 273,15 )* 9/5 + 32 ;
            echo " $ temp K = $ resultado °F ";
        } demás {
            echo " Las unidades seleccionadas no son compatibles. ";
        }
    }
    ?>
