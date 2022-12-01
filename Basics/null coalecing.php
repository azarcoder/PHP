<?php
$id=['xxx'];
$result = $id[0]??"not passed";
print($result)."<br>";

$id=['azar'];
$result = $id[0]??"not passed";
print($result);
echo "<br>";
//chaining
$id=['azar'];
$ps=[''];
$result = $id[0]??$ps[0]??"not passed";
print($result);
?>