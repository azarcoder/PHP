<?php 
$f = fopen('new.txt','r') or die ("unable to open");
while(!feof($f))
{
    $s=fgetc($f);
    if($s!='a' && $s!='e' && $s!='i' && $s!='o' && $s!='u')
        echo $s;
}
?>