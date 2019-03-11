<?php
    include("dbh.php");
    $sql = 'SELECT * FROM iot WHERE source = "lufttemperatur" ORDER BY id DESC limit 1';

    $resultat = mysqli_query($conn, $sql);

    $temp1 = mysqli_fetch_array($resultat);

    echo $temp1['value'];
?>