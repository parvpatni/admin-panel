<script type="text/javascript">
	
	function alerts(){
		alert("success");
	}

<?php
$con = mysqli_connect("localhost","root","","registeration") or die(mysqli_error($con));
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['cat_name']))
{     
$a=$_POST['cat_name'];
$b=date('Y-m-d H:i:s');
$sql = "INSERT INTO category VALUES(DEFAULT,'$a',DEFAULT,'$b')"; 
mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
echo "alerts();";

}
?>
window.location.href="par-categ.php";
</script>

