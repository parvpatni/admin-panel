<?php
$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query="select status from webdata WHERE id=".$_GET["id"];
$result= mysqli_query($con, $query) or die("Error".mysqli_error($con));
$row = mysqli_fetch_array($result);	
if($row)
{
$status=$row['status'];
} 
if($status=="available")
{
	$sql = "UPDATE webdata SET status='unavailable' WHERE id=".$_GET["id"]; 
mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
}
else
{
	$sql = "UPDATE webdata SET status='available' WHERE id=".$_GET["id"]; 
mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
}
header("location:database.php");	
?>

