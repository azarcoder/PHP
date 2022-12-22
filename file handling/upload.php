<?php 
$target_path = "uploads/";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
} 

echo "<br>"."FILE NAME:".$_FILES['fileToUpload']['name'];
echo "<br>"."FILE size:".$_FILES['fileToUpload']['size'];
echo "<br>"."FILE temp:".$_FILES['fileToUpload']['tmp_name'];
echo "<br>"."FILE type:".$_FILES['fileToUpload']['type'];
echo "<br>"."FILE error:".$_FILES['fileToUpload']['error'];

?>