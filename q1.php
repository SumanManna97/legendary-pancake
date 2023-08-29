<?php
	$con=mysqli_connect("localhost","root","","eportal");
	$sql="select * from questions where cid='PHP1'";
	$s=mysqli_query($con,$sql);
?>
<html>
<style>

</style>
<head>
<title>PHP Multiple Choice Questions and Answers</title>
</head>
<body>
<div class="container">
<h1>Multiple Choice Questions Answers</h1>
<p>Please fill the details and answers the all questions :-</p>
<form action="score.php" method="get">
<div class="form-group">
<strong>Name*:</strong><br/>
 <input type="text" name="name" value="" required>
</div>
<div class="form-group">
<strong>Phone*:</strong><br/> 
<input type="text" name="phone" value="" required>
</div>
<div class="form-group">
<strong>*Batch Id:</strong><br/> 
<input type="text" name="phone" value="" required>
</div>
<?php
while($r=mysqli_fetch_array($s))
{
?> 
<h3>Ques : <?php echo $r['ques'];?></h3>
<ol>
<li>
<input type="radio" name="q2" value="1" /><?php echo $r['opt1'];?>
</li>
<li>
<input type="radio" name="q2" value="2" /><?php echo $r['opt2'];?>
</li>
<li>
<input type="radio" name="q2" value="3" /><?php echo $r['opt3'];?>
</li>
<li>
<input type="radio" name="q2" value="3" /><?php echo $r['opt4'];?>
</li>
</ol>
</div>
<br/>
<?php
}
?>
<div class="form-group">
<input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
</div>
</form>
</div>
</body>
</html>