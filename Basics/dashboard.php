<?php
session_start();
if(isset($_SESSION['username']))
{
    echo '<h1> Welcome '.$_SESSION['username'].'</h1>';
    echo '<a href="logout.php">logout</a>';
}
else
{
    echo '<h1>welcome guest</h1>';
    echo '<a href="sessions.php">Home</a>';
}
?>