<?php
$fichero = @fopen('archivo.txt', 'rb', true);
if (!$fichero) {
    echo 'No se puede abrir el fichero';
}
$num = 1;
while (!feof($fichero)) {
    $linea = utf8_decode(fgets($fichero));
    echo "Linea " . $num . ": " . utf8_encode($linea) . "<br />";
    $num++;
}
fclose($fichero);
