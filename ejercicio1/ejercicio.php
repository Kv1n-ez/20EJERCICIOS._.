    <?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ temp = $ _POST [ 'temp' ];
        $ unidad = $ _POST [ 'unidad' ];
        si ($ unidad == 'celsius') {
            $ temperatura_convertida = ( $ temperatura * 9/5 ) + 32 ;
            echo " $ temperatura Celsius = $ temperatura_convertida Fahrenheit ";
        } elseif ( $ unidad == 'fahrenheit' ) {
            $ temp_convertido = ( $ temp - 32 ) * 5/9 ;
            echo " $ temp Fahrenheit = $ convert_temp Celsius ";
        }
    }
    ?>