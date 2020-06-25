<?php
if (isset($_REQUEST['enviar'])) {
    if (isset($_POST['voto'])) {
        $descriptorFichero = fopen("resultados.txt", "r");
        $buffer = fgets($descriptorFichero);
        $cadena = $buffer;
        $si = (int) strtok($cadena, ";");
        $no = (int) strtok(";");
        fclose($descriptorFichero);
        echo "SI " . $si;
        echo " NO " . $no . "<br />";
        echo "Usted voto: " . $_POST["voto"];
        $descriptorFichero = fopen("resultados.txt", "w");
        if ($_POST['voto'] == "si") {
            $si++;
        } else {
            $no++;
        }
        $cadena = $si . ";" . $no;
        fputs($descriptorFichero, $cadena);
        echo ("<table>\n");
        echo ("<tr>\n");
        echo ("<td class=\"cabecera\"><strong>respuesta</strong></td>");
        echo ("<td class=\"cabecera\"><strong>votos</strong></td>");
        echo ("<td class=\"cabecera\"><strong>porcentaje</strong></td>");
        echo ("</tr>");
        $totalVotos = $si + $no;
        $porcentaje = round(($si / $totalVotos) * 100, 2);
        $porcentaje1 = round(($no / $totalVotos) * 100, 2);
        echo ("<tr>");
        echo ("<td>si</td>");
        echo ("<td>" . $si . "</td>");
        echo ("<td>") . $porcentaje . "%</td>";
        echo ("</tr>");
        echo ("<td>no</td>");
        echo ("<td>" . $no . "</td>");
        echo ("<td>") . $porcentaje1 . "%</td>";
        echo ("</tr>");
        echo ("</table>");
        echo ("<p>nro. total de votos emitidos: $totalVotos</p>");
        echo ("<p><a href=\"encuesta.html\">pag. de votacion</a></p>");
    }
}
