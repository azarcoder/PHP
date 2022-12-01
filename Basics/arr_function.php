<?php
$a=["apple","orange","banana","peri","mango","pear","kiwi","tomoato"];

//count
// echo count($a);

//search
// var_dump(in_array("apple",$a)); //return true or false

//add
$a[]="AZAR"; //add to last
array_push($a,"ME"); //add to last
array_unshift($a,"WOW_FRUITS");//add to first

//remove 
array_pop($a);//remove last
array_shift($a);
//for specific element to remove
unset($a[2]); //it's alse remove the index as well

//split
// $c=array_chunk($a,2);//spiit into two

//merge two
$d=[1,2,3];
$f=[4,5,6];
// $m=array_merge($d,$f);

//copy elements 
// $xy=[1,2,3,4,5];
// $cpy=[...$xy, ...$f];

//combine NOTES:Both parameter should have to equal
$f1=['green','red','blue'];
$f2=['pink','violet','yellow'];
$ff=array_combine($f1,$f2); //takes as key and values of both array

$k=array_keys($ff); //print keys in number 

//flip
$flip = array_flip($f1); //flip into key into values
// print_r($flip);

//range-->it will create 20 array 
$num=range(1,20);

//map
$new = array_map(function($num){ //similar like JS map function
    return "Number ${num}";
},$num);

//filter
// $lessthan10 = array_filter($num,fn($num) => $num <= 10);
// print_r($lessthan10);

//reduce
$sum = array_reduce($num,fn($c,$num)=>
$c + $num);
var_dump($sum);
?>