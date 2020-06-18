<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class ClasePadre
    {
        protected  function miFuncion()
        {
            echo " Metodo Padre <br/>";
        }
    }
    class Extendida extends ClasePadre
    {
        public function miFuncion()
        {
            parent::miFuncion();
            echo "Metodo hijo<br/>";
        }
    }
    $miObjeto = new Extendida();
    $miObjeto->miFuncion();

    ?>
</body>

</html>