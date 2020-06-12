<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cadena = "Hola, me llamo Paco Perez, ya os he dicho que me llamo Paco, carajo!!";
    $i = 0;
    $pos = strpos($cadena, 'Paco', $i);
    echo ("Paco aparece en<br/>");
    while ($pos !== false) {
        echo "Aparece en: $pos<br/>";
        $i = $pos + 1;
        $pos = strpos($cadena, 'Paco', $i);
    }
    echo "fin<br/>";
    $cadena = str_replace("Paco", "Francisco", $cadena);
    echo (strtolower($cadena)) . "<br/>";
    echo (strtoupper($cadena));
    ?>
</body>

</html