<?php 

if(isset($_POST['submit']))
{
    $flag=1;
    $dir='uploads/';
    $target=$dir.basename($_FILES['myfile']['name']);//returns the exact directory for upload
    $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));//returns file extension only
    $imgsize=getimagesize($_FILES['myfile']['tmp_name']);//return an array of file
    if($imgsize!==false)
    {
        echo "file is an image-".$imgsize['mime'];
        $flag=1;
    }
    else
    {
        echo "file is not an image";
        $flag=0;
        
    }
    //check if file already exits
    if(file_exists($target))
    {
        echo "file exits already!";
        $flag=0;
    }
    //check file size
    if($_FILES['myfile']['size']>1000000)//byte
    {
        echo "Your file is too large";
        $flag=0;
    }
    //allow certain file format
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     $flag = 0;
    }
    // Check if $flag is set to 0 by an error
if ($flag == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["myfile"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
    
}

?>