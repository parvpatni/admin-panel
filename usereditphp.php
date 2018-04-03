<?php

$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   
$a=$_POST['email'];
$b=$_POST['password'];
$sql = "UPDATE user SET email='$a' , password='$b' WHERE id=".$_POST["id"]; 
mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
        header("Location: usermanage.php");
?>
