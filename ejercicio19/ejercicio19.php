<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ texto = $ _POST [ 'texto' ];
        $ prohibidas = explotar(" , ", $ _POST [ 'prohibidas' ]);
        foreach ( $ prohibidas  as  $ palabra ){
            $ texto = str_ireplace(trim( $ palabra ), " *** ", $ texto );
        }
        echo " Texto censurado: $ texto ";
    }
    ?>
