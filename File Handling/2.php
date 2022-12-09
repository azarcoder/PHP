<?php 
$f = fopen('notes.txt','r') or die('unable to open file!');
echo fread($f,filesize('notes.txt')); //syntx: fread($filevar,filesize('filename'));
fclose($f);
/*
Modes:
r -- read only
w -- write only
a -- write only,if file not found it will create and append but if already exists it will only append data
x -- create new file for write only.if file already exists, return FALSE
r+ - read/write(in begining of the file) 
w+ - read/write(erase previous data)
a+  
x+ 
*/
?>

