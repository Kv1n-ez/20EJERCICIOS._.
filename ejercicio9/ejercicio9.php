<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];
        $num_palabras = str_word_count($texto);
        echo "El número de palabras en el texto es: $num_palabras";
    }
?>
