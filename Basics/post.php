<?php
if(isset($_POST['submit']))
    echo $_POST['name']." ".$_POST['age'];
?>


<!--form-->
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="">Name</label><br>
    <input type="text" name="name" id="">
    <br><br>
    <label for="">Age</label><br>
    <input type="number" name="age" id="">
    <br><br>
    <input type="submit" name="submit">
</form>