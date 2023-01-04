<html>
<title> Bio-Data Display</title>
<head><center>
<style>
 fieldset{
 width: 650px;
 height: 850px;
 background-color: silver;
 text-align: left;
 padding: 10px;
 border: 4px solid black;
 }
 #image{
 border: 4px solid black;
 padding: 3px;
 margin-left: 400px; 
 margin-bottom: 30px;
 height: 150px;
 width: 140px;
 border-radius: 15px;
 } 
 </style>
</head>
<body> 
<fieldset>
 <center> <h1> Bio-Data</h1>
 </center>
 <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $name=$_POST['na'];
 $fna=$_POST['fname'];
 $mna=$_POST['mname'];
 $age=$_POST['age'];
 $gender=$_POST['gender'];
 if($gender=="m")
 {
 $gen="Male";
 }
 else if($gender=="f")
 {
 
 $gen="Female";
 }
 else if($gender=="o")
 {
 $gen="Others";
 }
 $email=$_POST['email'];
 $addr=$_POST['address'];
 $city=$_POST['city'];
 $pin=$_POST['pin'];
 $nation=$_POST['nation'];
 $ms=$_POST['status'];
 $photo=$_FILES['photo']['name'];
 $photo1=$_FILES['photo']['tmp_name'];
 $folder='C:\wamp64\www\bscb27\lab manual\week 7\week 7a\image/';
 move_uploaded_file($photo1,$folder.$photo);
 echo "<div id=image>";
 echo "<img src=image/$photo width=140px height=150px><br><br>";
 echo "</div>";
 echo "<B>Name &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;: 
</B>".$name."<br><br>";
 echo "<B>Father's Name &emsp;&emsp;&ensp;&nbsp;: </B>".$fna."<br><br>";
 echo "<B>Mother's Name &emsp;&emsp;&nbsp;&nbsp;: </B>".$mna."<br><br>";
 echo "<B>Age 
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
&ensp;&ensp;: </B>".$age."<br><br>";
echo "<B>Gender &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;: 
</B>".$gen."<br><br>";
 echo "<B>Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;: 
</B>".$email."<br><br>";
 echo "<B>Address&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;:</B> 
".$addr."<br><br>";
 if(isset($_POST["edu"])&& isset($_POST['sslc']))
 {
 echo "<table border=2px><tr><th><B>Educational 
Qualification</B></th><th><B>Percentage</B></th></tr>";
 echo "<tr><th>SSLC</th><th>".$_POST['sslc']."</th></tr>";
 }
 if(isset($_POST["edu1"])&& isset($_POST['hsc']))
 {
 echo "<tr><th>HSC</th><th>".$_POST['hsc']."</th></tr>";
 }
 if(isset($_POST["edu2"])&& isset($_POST['ug'])){
 echo "<tr><th>UG</th><th>".$_POST['ug']."</th></tr>";
 }
 if(isset($_POST["edu3"])&& isset($_POST['pg'])){
 echo "<tr><th>PG</th><th>".$_POST['pg']."</th></tr>";
 }
 echo "<B>City&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:</B> 
".$city."<br><br>";
 echo "<B>Pincode&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;:</B> 
".$pin."<br><br>";
 echo "<B>Nationality&emsp;&emsp;&emsp;&emsp;&ensp;:</B> ".$nation."<br><br>";
 echo "<B>Marital Status&emsp;&emsp;&ensp;&ensp;:</B> ".$ms."<br><br>";
 }
 ?>
 </fieldset></center>
</body>
</html>
