<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $f_euros = $_POST["euros"];
    echo " Son : ";
    echo $f_euros * 166.386;
    echo " pesetas";
    ?>
    <input type="text" name="euros" size="10" value="<?php echo $_POST['euros'] * 166.386 ?>">
</body>

</html>