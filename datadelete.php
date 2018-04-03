<?php 
// session_start(); 

// if(!isset($_SESSION['admin'])) 
//  {
//     header("Location:adminlogin.php"); 
//  }
$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$query="DELETE FROM webdata WHERE id=".$_GET["id"];
$result= mysqli_query($con, $query) or die("Error".mysqli_error($con));
header('location:database.php');
?>
