<?php
	include 'connection.php';
	$con=mysqli_connect("localhost","root","","eportal");
	$sql="select * from questions where cid='Sql'";
	$s=mysqli_query($con,$sql);
	$t=mysqli_fetch_array($s);
	$a=$_GET['3'];
	$b=$_GET['4'];
	$_SESSION['ses1']=$t;
	$sc1=0;
	echo "Sql1 : ".$a;
	echo "<br>";
	echo "Sql2 : ".$b;
	if(isset($_GET['submit']))
	{
		if(!empty($_GET['t']))
		{
			while($r=mysqli_fetch_array($s))
			{
				$chk=$r['ans']==$t;
				if($chk)
				{
					$sc1++;
				}
				echo "Your Score ".$scl;
			}
		}
	}	
?>