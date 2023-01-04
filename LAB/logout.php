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
		session_destroy();
		echo "<script>alert('session expired');</script>";
		date_default_timezone_set('Asia/Kolkata');
		$time=date("h:i:s");
		echo "Your logged out time is:".$time;
		?>
		<input type="button" onclick=location.href='login.html' value='To Login'>
	</pre>
</center>
</body>
</html>