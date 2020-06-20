<?php
$file = fopen("text.txt", "w");
echo "se han escrito al fichero " . fwrite($file, "Hola Mundo. Esto es una prueba!") . " caracteres";
fclose($file);
