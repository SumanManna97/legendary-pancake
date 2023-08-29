<html>
<body>
<table border="5px" width="500px">
<form method="GET">
<tr><td>Course-ID</td><td><input type="text" name="ci"></td><tr>
<tr><td>Course Name</td><td><input type="text" name="cn"></td><tr>
<tr><td>Topic 1</td><td><input type="text" name="t1"></td><tr>
<tr><td>Topic 2</td><td><input type="text" name="t2"></td><tr>
<tr><td>Topic 3</td><td><input type="text" name="t3"></td><tr>
<tr><td>Topic 4</td><td><input type="text" name="t4"></td><tr>
<tr><td>Topic 5</td><td><input type="text" name="t5"></td><tr>
<tr><td><input type="Submit"></td><tr>
</form>
</table>
</body>
</html>
<?php
if(isset($_GET['ci']))
{
	$a=$_GET['ci'];
	$b=$_GET['cn'];
	$c=$_GET['t1'];
	$d=$_GET['t2'];
	$e=$_GET['t3'];
	$f=$_GET['t4'];
	$g=$_GET['t5'];
	$con=mysqli_connect("localhost","root","","Eportal");
	$sql="insert into course (cid,cname,topic1,topic2,topic3,topic4,topic5)values('$a','$b','$c','$d','$e','$f','$g')";
	$r=mysqli_query($con,$sql);
	if($r==1)
	{
		echo ("Saved");
	}
	else
	{
		echo ("Not Saved");
	}
}
?>	