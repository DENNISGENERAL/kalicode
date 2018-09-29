<?php
session_start();
include "conn.php";
$username=$_SESSION["username"];
$query=mysqli_query($mysqli,"SELECT * from registration where username='$username'");
?>
<?php
while ($row=mysqli_fetch_array($query))
{
  echo $row['fname'];
  echo "<br>";
  echo $row['lname'];
  echo "<br>";
  echo $row['username'];
  
}
?>