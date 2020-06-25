<?php
$nombre = "archi1.txt";
if (file_exists($nombre)) {
    unlink($nombre);
    echo "el archi $nombre se borro correctamente";
} else {
    echo "no se encontro el archivo $nombre";
}
