<?php

if(isset($_FILES['fileToUpload']))
{
    echo "<pre>";
    echo print_r($_FILES['fileToUpload']);
    echo "</pre>";

    $fn=$_FILES['fileToUpload']['name'];
    $fs=$_FILES['fileToUpload']['size'];
    $ftn=$_FILES['fileToUpload']['tmp_name'];
    $fty=$_FILES['fileToUpload']['type'];
    $fe=$_FILES['fileToUpload']['error'];

    if($fe===0)
    {
        if($fs>1000000)
        {
            $em="file size large.";
            header("Location:file.html?error=$em");
        }
        else
        {
            $img_ex = pathinfo($fn,PATHINFO_EXTENSION);
            // echo($img_ex);
            $img_ex_lc = strtolower($img_ex);
            $a = array("jpg","jpeg","png");
            if(in_array($img_ex_lc,$a))
            {
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($ftn,$img_upload_path);
            }
            else{
                $em = "you can't upload this file type";
                header("Location:index.php?error=$em");
            }
        }
    }
    else
    {
        echo "unknown error occured!";
        header("Location:file.html?error=$em");
    }
}
else
{
    header("Location: index1.php");
}
?>