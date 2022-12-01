<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" placeholder="ID" name="id"><br><br>
    <input type="submit" name="submit" >
    </form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
    $n = $_POST['id'];
    $sn = "localhost";
    $un = "root";
    $ps = "";
    $dbn = "phpclass";

    $c = new mysqli($sn,$un,$ps,$dbn);

    if($c->connect_error)
        die("db error".$c->connect_error);
    echo "connected!".'<br>';

    $sql = "DELETE FROM students WHERE id=$n";
    $r = $c->query($sql);
    if(!$r)
        die("error".$c->connect_error);
    else    
        echo "Deleted!";
    $c->close();
}
?>