<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $texto = "la materia se transforma consumiendo o liberando energia.";
    $f = fopen("texto1.txt", "w");
    fputs($f, $texto);
    echo "texto almacenado correctamente";
    fclose($f);
    ?>
</body>

</html>