<?php
$cars = [56,34,12,1];
sort($cars);
foreach($cars as $v)
    echo $v." ";
echo "<br>";

$ass=array("Azar"=>19,"Bala"=>45,"Vetri"=>48,"Kumar"=>32);
//ASENDING
// asort($ass);//sort based on value
// ksort($ass);//sort based on key

//DECENDING
// arsort($ass);
// krsort($ass);
foreach($ass as $i => $v)
    echo $i."=>".$v."<br>";
?>