<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['checkbox1'])) {
        $resultado = $_REQUEST['text1'] + $_REQUEST['text2'];
        echo "<br/>El resultado es: $resultado";
    }
    if (isset($_REQUEST['checkbox2'])) {
        $resultado = $_REQUEST['text1'] - $_REQUEST['text2'];
        echo "<br/>El resultado es: $resultado";
    }
    if (isset($_REQUEST['checkbox3'])) {
        $resultado = $_REQUEST['text1'] * $_REQUEST['text2'];
        echo "<br/>El resultado es: $resultado";
    }
    if (isset($_REQUEST['checkbox4'])) {
        $resultado = $_REQUEST['text1'] / $_REQUEST['text2'];
        echo "<br/>El resultado es: $resultado";
    }
    ?>
</body>

</html>