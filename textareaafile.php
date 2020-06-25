<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <button name="prueba">Click</button> -->
    <?php
    if (isset($_REQUEST['boton'])) {
        echo "aqui estoy";
        if (isset($_POST['mensaje'])) {
            $texto = $_POST['mensaje'];
            $file = fopen("texto4.txt", "w");
            echo "se han escrito al fichero " . fwrite($file, $texto) . " caracteres";
        } else {
            echo "texto en blanco";
        }
    }
    ?>
    <form action="textareaafile.php" method="POST">
        <textarea name="mensaje" cols="40" rows="10" required></textarea> Mensaje <br />
        <input type="submit" name="boton" value="enviar" />
    </form>

</body>

</html>