<?php
$matriz = array();
$contador = 1;

// Crear matriz
for ($i = 0; $i < 6; $i++) {
    $fila = array();
    for ($j = 0; $j < 6; $j++) {
        $fila[] = sprintf("%02d", $contador);
        $contador++;
    }
    $matriz[] = $fila;
}

// Imprimir matriz
foreach ($matriz as $fila) {
    foreach ($fila as $numero) {
        echo $numero. ' ';
    }
    echo "<br>";
}
?>
