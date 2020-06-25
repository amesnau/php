<html>

<body>
    <?php
    $descriptorFichero = fopen("fichero_prueba.txt", "r");
    $buffer = fgets($descriptorFichero);
    $cadena = $buffer;
    $tok = strtok($cadena, ";");
    echo "-->$tok<br/>";
    $tok = strtok(";");
    echo "-->$tok<br/>";
    fclose($descriptorFichero);
    ?>
</body>

</html>