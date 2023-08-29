<?php
include 'connection.php';
$em=$_GET['a1'];
$pw=$_GET['b1'];
$sql="select * from student where email='$em' and pwd='$pw'";
$r=mysqli_query($con,$sql);
$t=mysqli_fetch_array($r);
$_SESSION['ses1']=$t;
if(mysqli_num_rows($r))
{
	header("location:studentdash.html?msg=Logged In Succesfully");
}
else
{
	header("location:log_in.html?msg=Wrong Info Try Again");
}
?>