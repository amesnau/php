<?php
$string = "maria.txt";
if (preg_match("/(jpg|jpeg|png|gif)/i", $string)) {
    echo $string;
};
// var_dump($matches);
// echo $matches[0];
// echo $matches[1];
