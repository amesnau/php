<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Persona
    {
        private $_nombre;
        private $_apellido;
        function __construct($param1, $param2)
        {
            $this->_nombre = $param1;
            $this->_apellido = $param2;
        }
        function __destruct()
        {
            echo "<br/>Hola/Adios";
        }
        public function presentarse()
        {
            echo "me llamo " . $this->_nombre;
        }
    }
    class Usuario extends Persona
    {
        private $_tipousuario;
        public function resetea()
        {
            echo "<br/>Le doy a CTRL+ALT+SUPR";
        }
    }
    $paco = new Usuario("Paco", "Perez");
    $paco->presentarse();
    $paco->resetea();
    ?>
</body>

</html>