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
        private $_fechaNacimiento;

        public function setEdad($fecha)
        {
            $this->_fechaNacimiento = $fecha;
        }
        public function getEdad()
        {
            return $this->_fechaNacimiento;
        }
    }
    ?>
</body>

</html>