<?php
$cadena = "Mañana iré al cine";
$utf = utf8_decode($cadena);
$cad = utf8_encode($utf);
echo $cadena;
echo "<br/>";
echo $utf;
echo "<br />";
echo $cad;
