<?php
$gestor=fopen("http://infolibre.es","rb");
$contenido="";
while (!feof($gestor)) {
    $contenido.=fread($gestor,8192);
}
echo $contenido;
fclose($gestor);
