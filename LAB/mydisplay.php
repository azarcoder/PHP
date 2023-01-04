<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<pre>
		<?php
			session_start();
			$user=$_POST['user'];
		    $_SESSION['user']=$user;
		    date_default_timezone_set('Asia/Kolkata');
		    $time=date("h:i:s");
		    $_SESSION['time']=$time;

		    echo "Welcome".$_SESSION['user']."<br><br>";
		    echo "Your login time is".$_SESSION['time'];

		?>
		<input type="button" onclick=location.href='logout.php' value="logout">
	</pre>
</center>
</body>
</html>