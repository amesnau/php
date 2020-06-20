<?php
$fichero=@fopen('archivo.txt','a-b',true);
if(!$fichero) {
    echo 'No se puede abrir el fichero.';
}
$cadena="Hola, esto es un ejemplo de escritura en ficheros ";
fwrite($fichero,$cadena,strlen($cadena));
