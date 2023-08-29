<?php
include 'connection.php';
$e=$_GET['a'];
$p=$_GET['b'];
$sql="select * from admin where email='$e' and pwd='$p'";
$r=mysqli_query($con,$sql);
$t=mysqli_fetch_array($r);
$_SESSION['ses']=$t;
if(mysqli_num_rows($r))
{
	header("location:admindash.html?msg=Logged In Succesfully");
}
else
{
	header("location:adminlogin.html?msg=Wrong Info Try Again");
}
?>