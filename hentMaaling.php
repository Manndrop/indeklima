<!DOCTYPE html>
<?php
include("dbh.php");

$sql = 'SELECT * FROM iot WHERE source = "Lysindfald" ORDER BY id DESC limit 1';
$sql2 = 'SELECT * FROM iot WHERE source = "lufttemperatur" ORDER BY id DESC limit 1';
$sql3 = 'SELECT * FROM iot WHERE source = "CO2" ORDER BY id DESC limit 1';

$resultat = mysqli_query($conn, $sql);
$resultat2 = mysqli_query($conn, $sql2);
$resultat3 = mysqli_query($conn, $sql3);

$l = mysqli_fetch_array($resultat);
$m = mysqli_fetch_array($resultat2);
$n = mysqli_fetch_array($resultat3);

echo "<p>".'Det anbefales at luxniveauet mindst er 300 lux for at få optimal læring. Den sidste time har lux niveauet været:'. '<br>' .$l['value'] . ' lux' ."</p>". '<br>';
echo "<p>".'Det anbefales at lufttemperaturen ikke overstiger 21 grader for optimal læring. Den sidste time har lufttemperaturen været:'. '<br>' .$m['value'] . ' grader' ."</p>". '<br>';
echo "<p>".'Det anbefales at CO2 niveauet ikke overstiger 1000 ppm for optimal læring. Den sidste time har Co2 været:'. '<br>' .$n['value'] . ' ppm' ."</p>". '<br>';

?>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
</body>
</html>


