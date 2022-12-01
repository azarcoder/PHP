<?php

$x = [10,20,30,50];
$y=array("me",123,true);
echo $x[0]."<br>";
var_dump($y);
print_r($x);
echo "<br>";

//Associative array
$colors=[
    1=>'red',
    4=>'green',
    8=>'pink'
];

echo $colors[4]."<br>";//it will print value of the key

$col=[
    'blue'=>'#f00',
    'red' => '#0f0',
];
echo $col['red'];
echo "<br>";

$person =[
    'fname'=>'Azaru',
    'lname'=>'deen',
    'email'=>'xyz@gmail.com'
];
echo $person['fname'];
echo "<br>";
//md array
$people =[
    [
        'fname'=>'Azaru',
        'lname'=>'deen',
        'email'=>'xyz@gmail.com'
    ],
    [
        'fname'=>'bilz',
        'lname'=>'deen',
        'email'=>'xyz@gmail.com'
    ],
    [
        'fname'=>'fellow',
        'lname'=>'deen',
        'email'=>'xyz@gmail.com'
    ]
];
echo $people[1]['fname']."<br>";
// var_dump($people);
var_dump(json_encode($people));//used to encode as JSON
//it will print in same line
?>