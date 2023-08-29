<html>
<body>
<table border="5px" width="500px">
<form method="GET">
<tr><td>Batch-ID</td><td><input type="text" name="ai"></td></tr>
<tr><td>Batch Name</td><td><input type="text" name="nm"></td></tr>
<tr><td>Mentor</td><td><input type="text" name="ei"></td></tr>
<tr><td><input type="submit"></td></tr>
</form>
</table>
</body>
</html>
<?php
if(isset($_GET['ai']))
{
	$a=$_GET['ai'];
	$b=$_GET['nm'];
	$c=$_GET['ei'];
	$con=mysqli_connect("localhost","root","","Eportal");
	$sql="insert into batch (id,cname,mentor)values('$a','$b','$c')";
	$r=mysqli_query($con,$sql);
	if($r==1)
	{
		echo("Saved");
	}
	else
	{
		echo("Not Saved");
	}
}
?>