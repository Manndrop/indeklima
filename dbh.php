<?php

$dBServername = "sql.itcn.dk:3306";
$dBUsername = "mmdskive.EADANIA";
$dBPassword = "s8V057SVuy";
$dBName = "mmdskive.EADANIA";

$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};