<html>

<body>
    <?php
    $descriptorFichero = fopen("fichero_prueba.txt", "r");
    ?>
    <table border="1">
        <?php
        while (!feof($descriptorFichero)) {
            echo "<tr>";
            $buffer = fgets($descriptorFichero);
            $cadena = $buffer;
            $tok = strtok($cadena, ";");
            while ($tok) {
                echo "<td>$tok</td>";
                $tok = strtok(";");
            }
            #echo "<br/><strong>linea</strong><br/>";
            echo "</tr>";
            #echo $buffer."<br/>";
        }
        echo "</table>";
        fclose($descriptorFichero);
        ?>

    </table>
</body>

</html>