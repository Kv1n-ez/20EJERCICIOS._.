<?php
    si ( $ _SERVIDOR [" REQUEST_METHOD "] == " POST ") {
        $ cadena = $ _POST ['cadena'];
        echo " Texto en mayúsculas: ". strtoupper($ cadena). " <br> ";
        echo " Texto en minúsculas: ". strtolower($ cadena). " <br> ";
        eco " Cantidad de caracteres: " . strlen($ cadena);
    }
?>