<?php

$u = $_POST['un'];
$p = $_POST['password'];

$c = new mysqli('localhost','root','','phpclass');
if($c->connect_error)
    die("connection error".$c->connect_errno);

    $sql = "SELECT * FROM logsystem WHERE name=?";
    $s =$c->prepare($sql);
    $s->bind_param('s',$u);
    $s->execute();
    $r=$s->get_result();
    if($r!='')
    {
        $d=$r->fetch_assoc();
        if($d['password']===$p)
            echo "<h3>Login Successful!</h3>";
        else 
            echo "<h3>Login error!</h3>";
    }
    else 
        echo "<h3>Account not found!</h3>";
?>