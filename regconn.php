<?php
     include_once ("conn.php");

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$username=$_POST["username"];
$password=$_POST["password"];

if($_POST['submit'])

{
	$sql="insert into registration(fname,lname,username,password)  values('$fname','$lname','$username',SHA1('$password'))";
	$result=mysqli_query($mysqli,$sql);
if ($result)


{
	echo    "<script language='JavaScript'>
	alert('Request successfully submitted')
	history.back();
	</script>";
	header('location:login.php');
}
}
else
{
  echo    "<script language='JavaScript'>
	alert('Request not submitted')
	history.back();
	</script>";
}
?>
