<?php
$a=array(
    array("azar",19),
    array("bilz",24),
    array("faizal",22),
    array("a",12)
);
for($i=0;$i<count($a);$i++){
    echo "<ul>";
    for($j=0;$j<2;$j++)
    {
        echo"<li>".$a[$i][$j]."</li>";
    }
    echo"</ul>";
}
    
?>