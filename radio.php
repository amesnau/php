<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_REQUEST['checkbox1'] == "sumar") {
        $resultado = $_REQUEST['text1'] + $_REQUEST['text2'];
        echo "<br/>El resultado es: $resultado";
    } 
    if ($_REQUEST['checkbox2'] == "restar") {
        $resultado = $_REQUEST['text1'] - $_REQUEST['text2'];
        echo "<br/>El resultado es: $resultado";
    } 
    if ($_REQUEST['checkbox3'] == "multiplicar") {
        $resultado = $_REQUEST['text1'] * $_REQUEST['text2'];
        echo "<br/>El resultado es: $resultado";
    } if ($_REQUEST['checkbox4'] == "dividir") {
        $resultado = $_REQUEST['text1'] / $_REQUEST['text2'];
        echo "<br/>El resultado es: $resultado";
    }
    ?>
</body>

</html>