<?php
    si ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
        $ fecha_nacimiento = new  DateTime ( $ _POST [ 'fecha_nacimiento' ]);
        $ hoy = nueva  FechaHora ();
        $ edad = $ hoy -> diff ( $ fecha_nacimiento );
        echo " Tu edad es: ". $ edad -> y . " años ", . $ edad -> m . " meses y ". $ edad -> d . " días. ";
    }
    ?>
