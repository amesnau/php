<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #cambio {
        background-color: red;
        color=white;
    }
    </style>
</head>

<body>
    <?php
    define ("CURSO","<span id=\"cambio\">Introduccion PHP</span>");
    define ("DONDE","Tame Centro de Formacion");

    ?>
    <p>-----------</p>
    <?php
    echo("Estamos en el curso ".CURSO."<br/>");
    echo("En ".DONDE."<br/>");
    ?>
</body>

</html>