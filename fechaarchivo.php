<?php
$nombre = "texto2.txt";
echo "<h3>";
if (file_exists($nombre)) {
    echo "archivo: $nombre";
    echo "<br /><br />";
    echo "ultima fecha de acceso:";
    echo date("d/m/y", fileatime($nombre));
    echo "<br /><br />";
    echo "ultima fecha de modificacion:";
    echo date("d/m/y", filemtime($nombre));
} else {
    echo "no se encontro el archivo $nombre";
}
echo "<br />La fecha de modificación del fichero $nombre es '" . date("F d Y H:i:s.", filemtime($nombre)) . "'";
