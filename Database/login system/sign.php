<?php
$nm = $_POST['nm'];
$db = date('Y-m-d',strtotime($_POST['dob']));
$em = $_POST['em'];
$ps = $_POST['pw'];

$c= new mysqli("localhost","root","","phpclass");
if($c->connect_error)
{
    die("Not connected!".$c->connect_error);
}
if(isset($_POST['ck']))
{
$sql = "INSERT INTO logsystem (name,dob,email,password) VALUE(?,?,?,?)";
$s=$c->prepare($sql);
$s->bind_param('ssss',$nm,$db,$em,$ps);
$s->execute();
$s->close();
$c->close();
echo "Data inserted!";
}
else 
    echo "Click Terms and conditions!";
?>