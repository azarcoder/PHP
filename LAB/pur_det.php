<?php
require_once 'login.php';
$connect =mysqli_connect($servername,$username,$password,$dbname);

if ($connect->connect_error)
{
	die($connect->connect_error);
}

echo "<h2><B>Customer Purchase Details</B></h2>";
$cno=$_REQUEST['cno'];
$query = "SELECT * FROM Customer where cid=$cno";
$result = $connect->query($query);

if (!$result) 
{
	die("Database access failed:".$connect->error);
}

$rows=$result->num_rows;
echo "<table border='1' align='left'>
      <tr>
      <th>Customer id</th>
      <th>Customer name</th>
      <th>Date of Purchase</th>
      <th>No of items</th>
      <th>Amout</th>
      </tr>" ;

for($j=0; $j<$rows; ++$j)
{
	$result->data_seek($j);
	$row = $result -> fetch_array(MYSQLI_NUM);
	echo "<tr>";
}
for($k=0; $k<5; ++$k)
{
	echo "<td>$row[$k]</td>";
	echo "</td>";
}
echo "</table>";
echo <<<_END
<br><br>
<input type="button" onClick="location.href='customer.html'" value='HOME'>
_END
?>