<?php
echo $_GET['name']." ".$_GET['age'];
?>

<!--URL-->
<a href="<?php $_SERVER['PHP_SELF'];?>?name=AZAR & age=20">click</a>

<!--form-->
<form action="" method="GET">
    <label for="">Name</label><br>
    <input type="text" name="name" id="">
    <br><br>
    <label for="">Age</label><br>
    <input type="number" name="age" id="">
    <br><br>
    <input type="submit" name="submit">
</form>