<?php
$f = fopen('notes.txt','r') or die('unable to open file!');
// echo fgets($f);//print first line only
// while(!feof($f))
//     echo fgets($f)."<br>";

while(!feof($f))
    echo fgetc($f)."<br>";
fclose($f);
?>