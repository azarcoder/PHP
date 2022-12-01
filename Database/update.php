<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form
        {
            background-color: #333;
            color: #fff;;
            padding: 8px;
            width: 300px;
            margin: 0 auto;
        }
        label{
            margin-left: 3%;
        }
        input[type="submit"]
        {
            border: none;
            background-color: olivedrab;
            color: #fff;
            margin-left: 25%;
            width: 50%;
        }
        input[type="email"]
        {
            margin-left: 10%;
        }
        input[type="submit"]:hover
        {
            cursor: pointer;
            background-color: red;
        }
    </style>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <label for="un">Enter ID&nbsp;&nbsp;&nbsp;</label><input type="text" placeholder="ID to UPDATE" name="id"><br><br>
    <label for="un">First name</label><input type="text" placeholder="First name" name="fn"><br><br>
    <label for="ln">Last name</label><input type="text" placeholder="last name" name="ln"><br><br>
    <label for="un">Email</label><input type="email" placeholder="Email" name="em"><br><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$em = $_POST['em'];
$id = $_POST['id'];

$sn = "localhost";
$un = "root";
$ps = "";
$dbn = "phpclass";

$c = new mysqli($sn,$un,$ps,$dbn);

if($c->connect_error)
    die("db error".$c->connect_error);
echo "connected!";
$sql = "UPDATE students SET firstname='".$fn."',lastname='".$ln."',email='".$em."' WHERE id=$id";
$s = $c->prepare($sql);
$s -> execute(); 
$s->close(); 
$c->close();
}
?>
