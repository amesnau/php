    <?php
    $nombre = "texto1.txt";
    $f = @fopen($nombre, "r") or die("Error al abrir el archivo: $nombre");
    echo "<h3>";
    echo fread($f, 24);
    echo "<br/><br/>";
    echo "se han leido los 24 primeros caracteres";
    fclose($f);
    $nombre_fichero = "texto1.txt";
    $gestor = fopen($nombre_fichero, "r");
    $contenido = fread($gestor, filesize($nombre_fichero));
    echo "contenido del fichero:$contenido";
    fclose($gestor);
    ?>
