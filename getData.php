<?php
    include("dbh.php");


$sql = 'SELECT left(obstime, 16)';
$sql = $sql . ' as nobstime,';
$sql = $sql . ' avg(value) as nvalue';
$sql = $sql . ' FROM iot ';
$sql = $sql . ' WHERE system = "Luxbanden" AND source = "lysindfald" ';
$sql = $sql . ' AND obstime >= DATE_SUB(NOW(), INTERVAL 1 HOUR) ';
$sql = $sql . ' GROUP BY nobstime';

$sql2 = 'SELECT left(obstime, 16)';
$sql2 = $sql2 . ' as nobstime,';
$sql2 = $sql2 . ' avg(value) as nvalue';
$sql2 = $sql2 . ' FROM iot ';
$sql2 = $sql2 . ' WHERE system = "IdaErin" AND source = "lufttemperatur" ';
$sql2 = $sql2 . ' AND obstime >= DATE_SUB(NOW(), INTERVAL 1 HOUR) ';
$sql2 = $sql2 . ' GROUP BY nobstime';

$sql3 = 'SELECT left(obstime, 16)';
$sql3 = $sql3 . ' as nobstime,';
$sql3 = $sql3 . ' avg(value) as nvalue';
$sql3 = $sql3 . ' FROM iot ';
$sql3 = $sql3 . ' WHERE system = "luftkvalitet" AND source = "CO2" ';
$sql3 = $sql3 . ' AND obstime >= DATE_SUB(NOW(), INTERVAL 1 HOUR) ';
$sql3 = $sql3 . ' GROUP BY nobstime';


$resultat_lux = mysqli_query($conn, $sql);
$resultat_temp = mysqli_query($conn, $sql2);
$resultat_co2 = mysqli_query($conn, $sql3);


$lux = mysqli_fetch_array($resultat_lux);
$temp = mysqli_fetch_array($resultat_temp);
$co2 = mysqli_fetch_array($resultat_co2);

/*

$source = $_GET['s'];
$system = $_GET['sys'];


$jsonArray, $jsonArray2, $jsonArray3 = array();

while($row = mysqli_fetch_assoc($resultat_lux)){
    $jsonArray[] = $row;
};

while($row = mysqli_fetch_assoc($resultat_temp)){
    $jsonArray2[] = $row;
};

while($row = mysqli_fetch_assoc($resultat_co2)){
    $jsonArray3[] = $row;
};

print json_encode($jsonArray);
print json_encode($jsonArray2);
print json_encode($jsonArray3);
*/


?>
