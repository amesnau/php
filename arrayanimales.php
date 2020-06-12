<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $my_array = array("Perro", "Gato", "Caballo");
    list($a, $b, $c) = $my_array;
    echo ("Tengo varios animales, un $a, un $b y un $c<br/>");
    $atr = array("Como", "estan", "ustedes", "??????");
    echo implode(" ", $atr) . "<br/>";
    if (preg_match("/php/i", "PHP es un lenguaje de script de servidor")) {
        echo "Lo hemos encontrado";
    } else {
        echo "Pues no lo hemos encontrado";
    }
    $documento = "<h1>Numero</h1><p>El numero es<strong>720</strong>, bla bla bla</p>";
    preg_match("#<strong>([0-9]+)</strong>#i", $documento, $num);
    echo "<br/>";
    echo "$num[0]<br/>";
    echo $num[1];
    $numeros = array(1, 2, 3, 4, 5, 6);
    for ($i = 0; $i < count($numeros); $i++) {
        echo "<br/>contenido de la posicion $i:$numeros[$i]";
    }
    $a = ($fruit ?? 'apple');
    echo "<br/>" . $a . "<br/>";
    $agenda = array(
        "Lunes" => "Estudiar PHP",
        "Martes" => "Estudiar CSS",
        "Miercoles" => "Examen de Java",
        "Jueves" => "Estudiar SQL",
        "Viernes" => "Salir de rumba"
    );
    echo "Hoy es Jueves, toca " . strtoupper($agenda['Jueves']) . "<br/>";
    var_dump($agenda);
    $ciudad = array(
        "Par" => "Paris",
        "Lon" => "Londres",
        "Ate" => "Atenas",
        "Ber" => "Berlin",
        "Lim" => "Lima",
    );
    echo "<h2>Vector de Ciudades</h2>";
    echo "<h3><hr/></h3>";
    reset($ciudad);
    // while (list($i, $valor) = each($ciudad)) {
    foreach ($ciudad as $i => $valor) {
        echo "Posicion: " . $i . " - ";
        echo "Contenido: " . $valor;
        echo "<br/>";
    }
    ?>
</body>

</html