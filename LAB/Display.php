<!DOCTYPE html>
<html>
<head>
	<title>Employee details</title>
</head>
<body style="background-color: lightblue">
<h2><B>Employee Details</B></h2>

<?php

$num=$_POST['eno'];
$name=$_POST['name'];
$desig=$_POST['desi'];
$bsal=$_POST['sal'];

$pf=$bsal*.02;
$da=$bsal*.06;
$hra=$bsal*.045;
$it=$bsal*.01;
$netsal=$bsal+$da+$hra-$pf-$it;
echo "<B> Details of ".$name."</B><br><br><br>"
?>

<table border="1" align="left">
	<tr>
	<th>ID</th>
	<th><?php echo $num; ?></th>
	</tr>
	<tr>
	<th>Basic salary</th>
	<th><?php echo $bsal; ?></th>
	</tr>
	<tr>
	<th>pf education</th>
	<th><?php echo $pf; ?></th>
	</tr>
	<tr>
	<th>hra</th>
	<th><?php echo $hra; ?></th>
	</tr>
	<tr>
	<th>IT</th>
	<th><?php echo $it; ?></th>
	</tr>
	<tr>
	<th>Netsalary</th>
	<th><?php echo $netsal; ?></th>
	</tr>
</table>
</body>
</html>