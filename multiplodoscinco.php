<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $multiploDos = false;
    $multiploCinco = false;
    if (isset($_GET['valor'])) {
        $f_valor = $_GET["valor"];
        if ($f_valor % 2 == 0) {
            // echo ("Es múltiplo de 2");
            $multiploDos = true;
        }
        if ($f_valor % 5 == 0) {
            echo (" Es múltiplo de 5");
            $multiploCinco = true;
        }
        if ((!$multiploDos) && (!$multiploCinco)) {
            echo ("No es multiplo de 2 ni de 5");
        }
    }
    ?>
    <!-- <form action="" method="POST">
        Indique nro.: <input type="text" name="valor" size="10">
        <input type="submit">

    </form> -->
</body>

</html>