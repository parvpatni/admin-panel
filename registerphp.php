<?php

if(sizeof($_POST)!=0)
{
$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_POST['email1'];
$b=$_POST['pass1'];
$c=$_POST['name1'];
$d=$_POST['address1'];
$e=$_POST['gender1'];
$f=$_POST['country1'];
$g=$_POST['state1'];
$h=$_POST['city1'];
// print_r($a);
// print_r($b);
$sql = "SELECT email FROM `user` WHERE `email` = '$a'";
$result= mysqli_query($con, $sql);
if (mysqli_num_rows($result)>0) {
	echo "email already exists";
}
else
{	$sql1="INSERT INTO `user` VALUES (DEFAULT,'$a','$b','$c','$d','$e','$f','$g','$h',DEFAULT)";
	$result1=mysqli_query($con, $sql1) or die("Error in Insertion: ".mysqli_error($con));
	if ($result1){ 
	echo "Success";}
}
}
?>