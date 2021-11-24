<?php

require 'Dado.php';

    $dado = new Dado();

    for ($i = 1; $i <= 12; $i++) {
        $resultado = $dado->tirarDado();
        echo "<p>Tirada nº$i => $resultado</p>";
    }

?>