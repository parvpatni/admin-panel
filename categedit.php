<?php
$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
if ($con->connect_error)
    die("Connection failed: " . $con->connect_error);

    $query="select * from category WHERE cat_id=".$_GET["cat_id"];
    $b=$_GET["cat_id"];
    $result= mysqli_query($con, $query) or die("Error".mysqli_error($con));
$row = mysqli_fetch_array($result); 
if($row['parent_id']==0)
{
    header("location:edit-par-categ.php");
}
else{
    header("location:edit-sub-categ.php");
}
?>






