<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $f_conv = $_POST['conv'];
    $f_cantidad = $_POST['cantidad'];
    echo "Son ";
    if ($f_conv == 1) {
        echo ($f_cantidad / 166.386);
        echo (" euros");
    } elseif ($f_conv == 2) {
        echo ($f_cantidad / 180.386);
        echo (" dollars");
    } else {
        echo ($f_cantidad / 2.047);
        echo (" dracmas");
    }
    ?>
</body>

</html>