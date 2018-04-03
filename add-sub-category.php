<script type="text/javascript">
	
	function alerts(){
		alert("success");
	}

<?php
$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['scat_name']))
{     
$a=$_POST['scat_name'];
$c=$_POST['parent-cat'];
$b=date('Y-m-d H:i:s');
$sql = "INSERT INTO category VALUES(DEFAULT,'$a','$c','$b',DEFAULT)"; 
mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
echo "alerts();";
}
?>
window.location.href="sub-categ.php";
</script>

