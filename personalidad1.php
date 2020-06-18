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
        public function __construct($nombre, $apellido)
        {
            $this->_nombre = $nombre;
            $this->_apellido = $apellido;
        }
    }    ?>
</body>

</html>