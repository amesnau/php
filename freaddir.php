<?php
$directorio = "images";
$nrocolumnas = 4;
$dir = opendir($directorio) or die("directorio no existe");
$fichero = readdir($dir);
$imagenes = array();
$i = 0;
while ($fichero !== FALSE) {
    if ($fichero !== "." & $fichero !== "..") {
        $tok = strtok($fichero, ".");
        $tok = strtok(".");
        if (preg_match("/(jpg|jpeg|png|gif)/i", $tok)) {
            // echo "Nombre fichero: " . $fichero . "<br />";
            $imagenes[$i] = $fichero;
            $i++;
        }
    }
    $fichero = readdir($dir);
}
echo "<table>";
$j = 1;
echo "<thead>";
$span = $nrocolumnas * 2;
echo "<tr><td colspan=\"$span\" style=\"text-align:center;\"><h3>DIRECTORIO: $directorio</h3><td><tr>";
echo "<tr>";
echo "<tbody>";
for ($i = 0; $i < count($imagenes); $i++) {

    echo "<td>";
    miniatura("./$directorio/$imagenes[$i]", "$imagenes[$i]", $directorio, 40, 40);
    echo "<a href=\"./$directorio/" . $imagenes[$i] . '"';
    echo "><img src=\"./$directorio/thumb/thumb_" . $imagenes[$i];
    echo '"></a>';
    echo "</td>";
    echo "<td><a href=\"./$directorio/" . $imagenes[$i] . '">';
    echo "$imagenes[$i]</a></td>";
    if ($j == $nrocolumnas) {
        $j = 1;
        echo "</tr><tr>";
    } else {
        $j++;
    }
}
echo "</tbody>";
closedir($dir);
function miniatura($archivo, $local, $dirsalida, $ancho, $alto)
{
    $arrNombre = explode(".", $local);
    $nombre = $arrNombre[0];
    $extension = $arrNombre[1];
    $thumb_name = "./$dirsalida/thumb/thumb_$nombre.$extension";
    if (file_exists($thumb_name)) {
        unlink($thumb_name);
    }
    if ($extension == "jpg" || $extension == "jpeg") $nuevo = imagecreatefromjpeg($archivo);
    if ($extension == "png") $nuevo = imagecreatefrompng($archivo);
    if ($extension == "gif") $nuevo = imagecreatefromgif($archivo);
    $thumb = imagecreatetruecolor($ancho, $alto); // Lo haremos de un tamaño 100x100
    $ancho_original = imagesx($nuevo);
    $alto_original = imagesy($nuevo);
    imagecopyresampled($thumb, $nuevo, 0, 0, 0, 0, $ancho, $alto, $ancho_original, $alto_original);
    if ($extension == "jpg" || $extension == "jpeg") imagejpeg($thumb, $thumb_name, 90); // 90 es la calidad de compresión
    if ($extension == "png") imagepng($thumb, $thumb_name);
    if ($extension == "gif") imagegif($thumb, $thumb_name);
}
