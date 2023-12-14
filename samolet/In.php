<?php

$named =$_POST['name'];
$dec=$_POST['dd'];
$pr=$_POST['price'];

$server = "84.201.184.150";
$login = "090302-istb-21_z";
$pass = "LcMTzdGASt";
$name_db = "090302-istb-21_samolet";

$link = mysqli_connect($server, $login,$pass,$name_db);
$link->set_charset("utf8");

$sql = "INSERT INTO `tarif`(`name`, `description`, `price`) VALUES ('$named','$dec','$pr')";
if ($link->query($sql) === TRUE){
    echo "данные отправленые";
} else{
    echo "Error: " . $sql . "<br>" . $sql->error;
}
?>
<button type="submit"><a href="index.php">На главную</a></button>