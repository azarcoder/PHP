<?php 
declare(strict_types=1); 

function pr($v,$x){
    return $v+$x;
}
// echo pr(12,"12 days");

//default parameter
function ad($x=20){
    return $x;
}
// echo ad(),ad(30);

//return type
function ret(float $x,float $y):float
{
    return $x+$y;
}
// echo ret(20.90,20.78);

//passing arg as reference
function myfn(&$val)
{
    $val+=$val;
}
$n=20;
myfn($n);
echo $n;
?>