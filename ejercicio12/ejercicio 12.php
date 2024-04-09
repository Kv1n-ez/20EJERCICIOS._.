<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ pesos = $ _POST [ 'pesos' ];
        $ altura = $ _POST [ 'altura' ];
        $ imc = $ peso / ( $ altura * $ altura );
        echo " Tu IMC es: $ imc <br> ";
        si ( $ imc < 18,5 ) {
            echo " Bajo peso ";
        } elseif ( $ imc >= 18,5 && $ imc < 24,9 ) {
            echo " Peso normal ";
        } elseif ( $ imc >= 25 && $ imc < 29,9 ) {
            echo " Sobrepeso ";
        } demás {
            eco " Obesidad ";
        }
    }
    ?>
