<?php

$count = 0;
if (isset($_COOKIE['count']))
{
	$count=$_COOKIE['count'];
	$count+1;
}
if (isset($_COOKIE['lastVisit'])) {
	$lastVisit=$_COOKIE['lastVisit'];
}
//set cookie for count
setcookie('count',$count+1,time()+3600);

//set cookie for lastVisit
setcookie('lastVisit',date("d-m-Y H:i:s"),time()+3600);

if ($count==0) {
	echo "welcome";
}
else
{
	echo "This is your visit number".$count;
	echo "<br>";
	echo "Last time, you were here on".$lastVisit;
}
?>