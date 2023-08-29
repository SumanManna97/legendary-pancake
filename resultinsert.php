<html>
<body>
<table border="5px" width="500px">
<form method="GET">
<tr><td>Result-ID</td><td><input type="text" name="ri"></td></tr>
<tr><td>Student-ID</td><td><input type="text" name="si"></td></tr>
<tr><td>Topic</td><td><input type="text" name="to"></td></tr>
<tr><td>Marks</td><td><input type="text" name="ma"></td></tr>
<tr><td><input type="submit"></td></tr>
</form>
</table>
</body>
</html>
<?php
if(isset($_GET['ai']))
{
	$a=$_GET['ri'];
	$b=$_GET['si'];
	$c=$_GET['to'];
	$d=$_GET['ma'];
	$con=mysqli_connect("localhost","root","","Eportal");
	$sql="insert into result (cid,sid,topic,marks)values('$a','$b','$c','R$d')";
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