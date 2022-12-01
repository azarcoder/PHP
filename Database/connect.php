<?php 

$sn = "localhost";
$un = "root";
$ps = "";

$c = new mysqli($sn,$un,$ps);

if($c->connect_error)
{
    die("Connection error".$c->connect_err);
}
echo "DB Connected";
$c->close();
?>
