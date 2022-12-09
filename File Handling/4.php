<?php 
$f = fopen('notes2.txt','w') or die ("error for file open"); 
$t = "oh my Allah\n";
fwrite($f,$t);
fwrite($f,"PHP Programming\n");
fclose($f);
?>