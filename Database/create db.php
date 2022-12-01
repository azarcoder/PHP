<?php
$sn = "localhost";
$un = "root";
$ps = "";
$dbn = "phpclass";

$c = new mysqli($sn,$un,$ps);

if($c->connect_error)
    die("db error".$c->connect_error);
echo "connected!";
$sql = "CREATE DATABASE phpclass";
if($c->query($sql)==true)
    echo "Database created successfully!";
else 
    echo "Database not created/Aleready Exist!".$c->connect_error;
$c->close();
?>