<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST['cantidad'];
        $tasa_cambio = 0.13;
        $resultado = $cantidad * $tasa_cambio;
        echo "$cantidad Q = $resultado USD";
    }
?>