<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST['cadena'];
        $cadena_invertida = strrev($cadena);
        echo "Cadena invertida: $cadena_invertida";
    }
    ?>
