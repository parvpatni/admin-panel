<?php
$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['email']))
{     
$a=$_POST['email'];
$b=$_POST['password'];
$sql = "INSERT INTO user VALUES(DEFAULT,'$a','$b','available')"; 
mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
        header("Location: usermanage.php");
}
?>
