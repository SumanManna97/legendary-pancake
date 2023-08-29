<?php
	include 'connection.php';
	$con=mysqli_connect("localhost","root","","eportal");
	$sql="select * from questions where cid='PHP1'";
	$s=mysqli_query($con,$sql);
	$t=mysqli_fetch_array($s);
	$a=$_GET['1'];
	$b=$_GET['2'];
	$_SESSION['ses1']=$t;
	$sc1=0;
	echo "HTML1 : ".$a;
	echo "<br>";
	echo "HTML2 : ".$b;
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