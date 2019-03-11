<?php

$source = $_GET['s'];
$system = $_GET['sys'];





$jsonArray = array();

while($row = mysqli_fetch_assoc($resultat)){
    $jsonArray[] = $row;
};

print json_encode($jsonArray);