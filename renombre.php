<?php
$nombreActual = "texto1.bak";
$nombreNuevo = "archi1.txt";
if (file_exists($nombreActual)) {
    if (rename($nombreActual, $nombreNuevo)) {
        echo "El nombre se cambio correctamente";
    } else {
        echo "El nombre no se cambio correctamente";
    }
} else {
    echo "No se encontro el archivo $nombreActual";
}
