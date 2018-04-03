<!DOCTYPE html>
<html>
<head>
    <title>country state city</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript' src='ajax.js'></script></head>
<body>
<?php

include('dbConfig.php');

//Get all country data
$query = $db->query("SELECT * FROM countries");

//Count total number of rows
$rowCount = $query->num_rows;
?>
<select name="country" id="country">
    <option value="">Select Country</option>
    <?php
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
        }
    }else{
        echo '<option value="">Country not available</option>';
    }
?>
</select>

<select name="state" id="state">
    <option value="">Select country first</option>
</select>

<select name="city" id="city">
    <option value="">Select state first</option>
</select>
</body>
</html>