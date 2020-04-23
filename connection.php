<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coronadb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("Connection Failed: " . mysqli_connect_error());
} 
?>

<script type="text/javascript">
	alert("Connection Successful");
</script>
