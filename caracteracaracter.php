<?php
$file = fopen("texto1.txt", "r");
while (!feof($file)) {
    echo "<br />" . fgetc($file);
}
fclose($file);
