<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="txt">
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
    $fn = $_FILES['txt']['tmp_name'];
    $f = fopen($fn,"r") or die("error");
    while(!feof($f))
        echo fgets($f).'<br>';

}

?>