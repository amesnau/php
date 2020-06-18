<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Matematicas
    {
        static $pi = 3.1416;
        public static function cuadrado($numero)
        {
            return $numero * $numero;
        }
        public static function hipotenusa($cateto, $cateto2)
        {
            return sqrt(self::cuadrado($cateto) + self::cuadrado($cateto2));
        }
        public function getPi()
        {
            return self::$pi;
        }
    }
    echo Matematicas::cuadrado(5);
    echo Matematicas::hipotenusa(5, 6);
    $miObjMatematica = new Matematicas();
    echo "<br/>" . $miObjMatematica->getPi();
    echo "<br/>" . Matematicas::getPi();
    echo "<br/>" . $miObjMatematica::getPi();

    ?>
</body>

</html>