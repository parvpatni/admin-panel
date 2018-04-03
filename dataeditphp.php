<?php
if(is_uploaded_file($_FILES['filetoupload']['tmp_name']))
{
    	$target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES["filetoupload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    //changing file name
    $original=$_FILES["filetoupload"]["name"];
    $change=explode(".",$original);
    $file=time().".".$change[1];
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["filetoupload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file

    } else {
        if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_dir.$file)) {
            echo "The file ". basename($file). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    if(isset($_POST['name']))
    {     
    $a=$_POST['name'];
    $b=$_POST['description'];
    $sql = "UPDATE webdata SET name='$a' , description='$b', image='$file'  WHERE id=".$_POST["id"]; 
    mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
               header("Location: database.php");
    }
}

else
{
    $con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    if(isset($_POST['name']))
    {     
    $a=$_POST['name'];
    $b=$_POST['description'];
    $sql = "UPDATE webdata SET name='$a' , description='$b' WHERE id=".$_POST["id"]; 
    mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
             header("Location: database.php");
    }	
}