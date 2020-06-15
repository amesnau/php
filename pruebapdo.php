<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>>
</head>

<body>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";
$mytable = "cdinventory";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO $mytable (title, artist, country, company, price, titleyear, imagen, available)
  VALUES 
  ('Greatest Hits','Dolly Parton','USA','RCA',9.90,'1982','dolly.jpg',3),
('Still got the blues','Gary Moore','UK','Virgin records',10.20,'1990','gary.jpg',20),
('Eros','Eros Ramazzotti','EU','BMG',9.90,'1997','eros.jpg',18),
('One night only','Bee Gees','UK','Polydor',10.90,'1998','beegees.jpg',14),
('Sylvias Mother','Dr.Hook','UK','CBS',8.10,'1973','drhook.jpg',4),
('Maggie May','Rod Stewart','UK','Pickwick',8.50,'1990','rodstwart.jpg',6),
('Romanza','Andrea Bocelli','EU','Polydor',10.80,'1996','andrea.jpg',21),
('When a man loves a woman','Percy Sledge','USA','Atlantic',8.70,'1987','percy.jpg',11),
('Black angel','Savage Rose','EU','Mega',10.90,'1995','savage.jpg',5),
('1999 Grammy Nominees','Many','USA','Grammy',10.20,'1999','grammy.jpg',9),
('For the good times','Kenny Rogers','UK','Mucik Master',8.70,'1995','kenny.jpg',3),
('Big Willie style','Will Smith','USA','Columbia',9.90,'1997','will.jpg',18),
('Tupelo Honey','Van Morrison','UK','Polydor',8.20,'1971','van.jpg',7),
('Soulsville','Jorn Hoel','Norway','WEA',7.90,'1996','jorn.jpg',3),
('The very best of','Cat Stevens','UK','Island',8.90,'1990','cat.jpg',12),
('Stop','Sam Brown','UK','A and M',8.90,'1988','sam.jpg',6),
('Bridge of Spies','T Pau','UK','Siren',7.90,'1987','tpau.jpg',4),
('Private Dancer','Tina Turner','UK','Capitol',8.90,'1983','tina.jpg',8),
('Midt om natten','Kim Larsen','EU','Medley',7.80,'1983','kim.jpg',14),
('Pavarotti Gala Concert','Luciano Pavarotti','UK','DECCA',9.90,'1991','luciano.jpg',20),
('The dock of the bay','Otis Redding','USA','Atlantic',7.90,'1987','otis.jpg',19),
('Picture book','Simply Red','EU','Elektra',7.20,'1985','simply.jpg',16),
('Red','The Communards','UK','London',7.80,'1987','communards.jpg',7),
('Unchain my heart','Joe Cocker','USA','EMI',8.20,'1987','joe.jpg',0)
";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New records created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null; ?>

</html>