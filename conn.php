<?php
 
//MySQLi Procedural
$mysqli = mysqli_connect("localhost","root","","reg");
if (!$mysqli) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>