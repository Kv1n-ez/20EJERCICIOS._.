​​​​<?php
        si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
            $ figura = $ _POST [ 'figura' ];
            cambiar ( $ figura ) {
                caso  'cuadrado' :
                eco " lado:
                <tipo de entrada='número' nombre='lado' requerido><br> ";
                romper ;
                caso  'círculo' :
                    eco " Radio:
                    <tipo de entrada='número' nombre='radio' requerida><br> ";
                    romper ;
                caso  'rectángulo' :
                    eco " Base:
                    <tipo de entrada='número' nombre='base' requerida><br>
                    Altura:
                    <tipo de entrada='número' nombre='altura' requerido><br> ";
                    romper ;
                por defecto :
                    echo " Seleccione una figura. ";
                    romper ;
            }
        }
        ?>
        < tipo de entrada  =" enviar " valor =" Calculadora " >
    </ formulario >
    a
    <?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        cambiar ( $ figura ) {
            caso  'cuadrado' :
                $ lado = $ _POST ['lado'];
                $ área = $ lado * $ lado ;
                $ perimetro = 4 * $ lado ;
                echo " Área del cuadrado: $ área <br> ";
                echo " Perímetro del cuadrado: $ perimetro ";
                romper ;
            caso  'círculo' :
                $ radio = $ _POST ['radio'];
                $ área = M_PI * $ radio * $ radio ;
                $ perimetro = 2 * M_PI * $ radio ;
                echo " Área del círculo: $ área <br> ";
                echo " Perímetro del círculo: $ perimetro ";
                romper ;
            caso  'rectángulo' :
                $ base = $ _POST ['base'];
                $ altura = $ _POST ['altura'];
                $ área = $ base * $ altura ;
                $ perimetro = 2 * ($ base + $ altura);
                echo " Área del rectángulo: $ área <br> ";
                echo " Perímetro del rectángulo: $ perimetro ";
                romper ;
            por defecto :
                romper ;
        }
    }
?>
