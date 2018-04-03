<?php
$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query="select status from category WHERE cat_id=".$_GET["cat_id"];
$result= mysqli_query($con, $query) or die("Error".mysqli_error($con));
$row = mysqli_fetch_array($result);	
if($row)
{
$status=$row['status'];
} 
if($status=="available")
{
	$sql = "UPDATE category SET status='unavailable' WHERE cat_id=".$_GET["cat_id"]; 
mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
}
else
{
	$sql = "UPDATE category SET status='available' WHERE cat_id=".$_GET["cat_id"]; 
mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
}
header("location:manage-categ.php");	
?>

