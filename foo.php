<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function foo()
    {

        $numargs = func_num_args();
        echo "Nro. de argumentos: $numargs<br/>\n";
        if ($numargs >= 2) {
            echo "El segundo argumento es: " . func_get_arg(1) . "<br/>\n";
        }
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++) {
            echo "El argumento $1 es" . $arg_list[1] . "<br/>\n";
        }
    }
    foo(1, 2, 3);
    ?>

</body>

</html>