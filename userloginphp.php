<?php
session_start();
?>

<?php

if(sizeof($_POST)!=0)
{
$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_POST['userid1'];
$b=$_POST['pass1'];

// print_r($a);
// print_r($b);

$query="select status from user WHERE email='$a'";
$result= mysqli_query($con, $query) or die("Error".mysqli_error($con));
$row = mysqli_fetch_array($result); 
if($row)
{
$status=$row['status'];
}
else
{
	$status='';
} 
if($status=="unavailable")
{
	echo "You are Blocked";
}
else if($status=="available")
{
$sql = "SELECT email,password FROM `user` WHERE `email` = '$a'";
$result= mysqli_query($con, $sql) or die("Error in Selection:".mysqli_error($con));
$row = mysqli_fetch_array($result);
if($row[0]==$a && $row[1]==$b)
{
	echo "Success";
	$_SESSION['user']=$a;
	// header('location:database.php');
}
else
{
	// header('location: errorlogin.php');
	echo "Password entered is wrong";
}
}
else
{
	echo "email does not exist";
}
}
?>