<?php
include "conn.php";
session_start();
$username=$_POST['username'];
$password=$_POST['password'];



if($_POST['submit'])
$_SESSION['username']="$username";
$_SESSION['password']="$password";

{
	$sql="SELECT * from registration where username='$username' and password=SHA1('$password')";
	$result=mysqli_query($mysqli,$sql);
	$num=mysqli_num_rows($result);
	if(!$num)
	{

echo "<script language='Javascript'>
alert ('Incorrect login,please Re-enter username and password')
history.back();
</script>";
}
else

{
	while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
	{

if($row['username']==$username AND $row['password']==SHA1($password))
{



	echo "<script language='Javascript'>
alert ('success');
history.back();
</script>";
//echo
header('location:dashboard.php');
}
}}}




?>