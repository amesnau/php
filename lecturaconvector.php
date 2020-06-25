<?php
$texto = "En el universo hay materia y energia,
la materia se halla en ciertos cuerpos
llamados cuerpos celestes.
Algunos cuerpos son frios y no emiten energia,
otros son calientes y emiten luz y calor.";
$f = fopen("texto2.txt", "w");
fwrite($f, $texto);
fclose($f);
$nombre = "texto2.txt";
$f = @fopen($nombre, "r") or die("Error al abrir el fichero");
fclose($f);
$v = file($nombre);
$cantidad = count($v);
echo "<H3>";
echo "Vector Generado:" . "<br />";
for ($i = 0; $i < $cantidad; $i++) {
    echo "Posicion [$i]: $v[$i]" . "<br />";
}
