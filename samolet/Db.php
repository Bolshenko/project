<?php
$server = "84.201.184.150";
$login = "090302-istb-21_z";
$pass = "LcMTzdGASt";
$name_db = "090302-istb-21_samolet";

$link = mysqli_connect($server, $login,$pass,$name_db);
$link->set_charset("utf8")
?>