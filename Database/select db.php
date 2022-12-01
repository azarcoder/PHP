<style>
b{
    background-color: yellow;
}
</style>
<?php
$sn = "localhost";
$un = "root";
$ps = "";
$dbn = "phpclass";

$c = new mysqli($sn,$un,$ps,$dbn);

if($c->connect_error)
    die("db error".$c->connect_error);
echo "connected!".'<br>';

$sql = "SELECT id,firstname,lastname,email FROM students";
$result =$c->query($sql);
if($result-> num_rows > 0)
{
    while($r = $result->fetch_assoc())
    {
        echo "id:"."<b>".$r["id"]."</b>".' '.'first name:'.$r['firstname'].' '.'last name:'.$r['lastname'].' '.
        'Email:'.$r['email'].'<br>';
        // echo "<table><tr><td>".$r.['id']."</td><td>".$r.['firstname']."</td> 
        // <td>".$r.['lastname']."</td><td>".$r.['email']."</td></tr>";
    }
    echo "</table>";
}
else
    echo '0 results';
$c->close();
?>