<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre = "mivariable";
    $mivariable = "Hola mundo variable";
    echo $$nombre;
    $x = 5;
    $y = 10;
    function miTest()
    {
        // global $x, $y;
        // $y = $x + $y;
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    miTest();
    echo $y . "<br/>";
    function contador()
    {
        static $cont = 0;
        $cont = $cont + 1;
        return $cont;
    }
    echo contador() . "<br/>";
    echo contador() . "<br/>";
    echo contador() . "<br/>";
    $original = "Esto es fuera de la funcion";
    function cambio(&$original)
    {
        $original = "Esto es dentro de la funcion";
        echo $original;
    }
    echo "Fuera de la funcion la variable es: ";
    echo $original . "<br/>";
    echo "Dentro de la funcion, la variables es: ";
    cambio($original);
    echo "<br/>Esto esta fuera de la funcion de nuevo:";
    echo $original;
    ?>

</body>

</html>