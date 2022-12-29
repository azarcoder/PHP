<?php
//The filter_var() function both validate and sanitize data.

//string
$s="<h1>Azarudeen</h1>";
$n = filter_var($s, FILTER_SANITIZE_STRING); //remove html tags
echo $n.'<br>';

//int
$i=10;
echo filter_var($i,FILTER_VALIDATE_INT);//only print if i will be int otherwise won't print
echo "<br>";

//ip
$ip='120.0.0.1';
echo filter_var($ip,FILTER_VALIDATE_IP);

/*
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_URL
filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 -- for ip6 validate

please check php validate reference for more 
*/
?>
