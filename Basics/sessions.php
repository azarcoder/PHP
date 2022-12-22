<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="">Username</label><input type="text" name="un"><br><br>
        <label for="">Passsword</label><input type="password" name="ps"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php

/*-------sessions--------- */
/*
Sessions are a way to store information (in variables) to
be used acress multiple pages.
Unlike cookies, sessions are stored on server.
*/
session_start();
if(isset($_POST['submit']))
{
$u = filter_input(INPUT_POST,'un',FILTER_SANITIZE_SPECIAL_CHARS);
$p = $_POST['ps'];
if($u=='azar' && $p=='1234')
{
    $_SESSION['username']=$u;
    header('Location:/php/dashboard.php');
}
else
{
    echo "incorrect login";
}
}
?>