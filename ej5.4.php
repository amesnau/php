<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $f_numero = $_GET['numero'];
    if ($f_numero % 2 == 0) {
        echo (" Es nro par");
    } else {
        echo (" Es nro impar");
    }
    ?>
</body>

</html>