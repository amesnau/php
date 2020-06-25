<?php
$archivo = 'texto1.txt';
$nuevo_archivo = 'texto1copiado.txt';
if (!copy($archivo, $nuevo_archivo)) {
    echo "ola k ase";
} else {

    echo "si lo iso";
}
if (!rename($nuevo_archivo, "texto1backup.txt")) {
    echo "ola k ase";
} else {
    echo "si lo iso";
}
