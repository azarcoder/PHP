<?php
$c=["apple","orange","kiwi","pear"];

// echo count($c);

// for($x=0;$x<count($c);$x++)
//     echo $c[$x]." ";

$c=["apple","orange","kiwi","pear"];
foreach($c as $v)
    echo $v." ";
echo "<br>";
//index and value
foreach($c as $i=>$v)
    echo $i."=>".$v."<br>";
echo "<br>";

$person =[
    'fname'=>'Azaru',
    'lname'=>'deen',
    'email'=>'xyz@gmail.com'
];
foreach($person as $i => $v)
    echo $i."=>".$v."<br>";
?>