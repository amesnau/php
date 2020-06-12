<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $x = 1;
    echo "<table border='1'>";
    for ($i = 0; $i <= 10; $i++) {
        # code...
        echo "<tr>";
        echo '<td>2</td><td>x</td><td>' . $i . '</td><td>' . (2 * $i) . '</td>';
        echo "</tr>";
        // $x++;
    }
    echo "</table>";
    // }
    // <!-- while ($x <= 10) { -->
    ?>
</body>

</html>