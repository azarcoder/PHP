<?php

if(isset($_POST['submit']))
{
    $c =new mysqli("localhost","root","","phptest");
    if($c)
    {
        echo "connected successfully!";
        $t='uploads/';
        $target=$t.basename($_FILES['img']['name']);
        $tf=$_FILES['img']['tmp_name'];
        $fn=$_FILES['img']['name'];
        move_uploaded_file($tf,$target);
        $sql = "INSERT INTO fileupload (photo) values ('$fn')";
        $result = mysqli_query($c,$sql);
        if ($result)
        {
            echo "<br>Image upload to database sucessfully!";
        }   
    }
    else
    {
        die("connection error".$c->connect_error);
    }
}


?>