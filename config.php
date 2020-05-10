<?php

$dbhost = "localhost";
$dbname = "datadiri";
$dbuser = "root";
$dbpassword = "";

$koneksi = mysqli_connect($dbhost,$dbuser,$dbpassword) or die ("Koneksi ke server error!");
mysqli_select_db ($koneksi,$dbname) or die (mysqli_connect_error());
?>
