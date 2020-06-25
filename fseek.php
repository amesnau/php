<?php
$nombre = "texto1.txt";
$f = @fopen($nombre, r) or die("Error al abrir el archivo:$nombre");
echo "<h3>";
fseek($f, 19);
echo fread($f, 40);
echo "<br />";
fseek($f, 15);
echo fread($f, 4);
echo "<br />";
rewind($f);
echo fread($f, 15);
fclose($f);
