<?php
$lineas = file('archivo.txt');
// foreach ($lineas as $numero => $linea) {
//     $numero_de_linea = $numero + 1;
//     echo "Linea $numero_de_linea: $linea<br/>";
// }
$gestor = fopen('texto1.txt', 'r');
// $numero = 0;
$contenido = "";
while (!feof($gestor)) {
    $contenido .= fgets($gestor);
}
echo $contenido;
fclose($gestor);
