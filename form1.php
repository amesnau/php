<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['boton'])) {
        echo "El apellido introducido es: $_REQUEST[apellido]";
    } else {

    ?>
        <form action="form1.php" method="POST">
            <input type="text" name="apellido" />
            <input type="submit" name="boton" value="ejecutar" />
        </form>
    <?php
    }
    ?>
</body>

</html>