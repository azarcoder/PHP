<?php
$sn = "localhost";
$un = "root";
$ps = "";
$dbn = "phpclass";

$c = new mysqli($sn,$un,$ps,$dbn);

if($c->connect_error)
    die("db error".$c->connect_error);
echo "connected!";
$sql = "CREATE TABLE students(
    id INT(6) UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
)";
if($c->query($sql)==true)
    echo "Table created!";
else
    echo "Error to create table".$c->connect_error;
$c->close();
?>