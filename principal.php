<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="content">
        <hr />
        <strong>Introduce tu Edad</strong> <br />
        <form action="principal.php" method="post">
            Su Edad: <input type="text" name="edad" maxlength="50" size="32" /> <br />
            <input type="submit" name="enviar" value="Enviar" />
        </form>
        <hr />
    </div>
    <?php
    require 'clases.php';
    if (isset($_POST["enviar"])) {
        $valor = $_POST["edad"];
        $persona = new Persona();
        $persona->setEdad($valor);
        $result = $persona->getEdad();
        echo "tu edad es " . $result;
        echo "<br/>tu edad (accediendo al atributo): " . $persona->_fechaNacimiento;
    }
    ?>
</body>

</html>