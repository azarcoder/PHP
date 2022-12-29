<?php
//JSON stands for JavaScript Object Notation
$a = array("Azar"=>21,"t4teq"=>2017);
$x =json_encode($a);
echo $x.'<br>';
//json_encode -- used to encode as json format
//$jsonobj = '{"azar":21,"bilz":24,"John":24}';
//json_decode -- used to decode as json format
echo var_dump(json_decode($x));
?>