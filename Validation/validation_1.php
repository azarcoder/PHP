<html>
    <body>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Email:<input type="text" name="em"><br><br>
        password:<input type="Password" name="psw"><br>
        <br>
        <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$n=tt($_POST['em']);
$pp=tt($_POST['psw']);
}
 function tt($d)
    {
        $d=trim($d);
        $d=stripslashes($d);
        $d=htmlspecialchars($d);
        return $d;
    }
?>
