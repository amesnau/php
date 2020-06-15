<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Persona {
        var $_nombre;
        var $_apellido;
        var $_fechaNacimiento;

        function setEdad($fecha) {
            $this -> fechaNacimiento=$fecha;
        }
        function getEdad() {
            return $this->_fechaNacimiento;
        }
    }
    ?>
</body>

</html>