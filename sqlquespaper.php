<?php
	$con=mysqli_connect("localhost","root","","eportal");
	$sql="select * from questions where cid='Sql'";
	$s=mysqli_query($con,$sql);
?>
<html>
<style>
.form-group{
	font-size:25px;
}
.form-group #ib{
	height: 32px;
    width : 300px;
}
p{
	font-size:30px;
	font-weight:600;
}
body{
	background: rgb(131,58,180);
    background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(246,44,44,0.5721638997395833) 50%, rgba(252,176,69,1) 100%);
	color:black;
	font-size:20px;
	font-weight:bolder;
	margin:2rem;
}
#btn{
	background-color:black;
	color:white;
	font-size:18px;
	padding:15px 30px;
	font-weight:500;
	border-radius:10px;
	cursor:pointer;
}
h1{
	height:60px;
	width:100%;
	border-bottom:9px black;
	display:flex;
	align-items:center;
	padding:0 35px;
	
}
h3{
	font-size:30px;
	font-weight:600;
}
.option{
	padding:20px 0;
	display:block;
	font-size:25px;
	background:aliceblue;
	border:1px solid #24c5fe;
	border-radius:5px;
	padding:10px 25px;
	margin-bottom:10px;
	display:flex;
	align-items:center;
	justify-content:space-between;
	cursor:pointer;
	transition:all 0.3s ease;
	list-style-type:none;
}
.option:hover{
	color:#1aeda4;
	background:#cce5ff;
	border-color:#b8daff;
}
</style>
<head>
<title>Sql Multiple Choice Questions and Answers</title>
</head>
<body>
<h1>SQL Multiple Choice Questions Answers</h1>
<p>Please fill the details and answers the all questions :-</p>
<form action="score2.php" method="get">
<div class="form-group">
<strong>Name*:</strong><br/>
 <input type="text" name="name" id="ib" value="" required>
</div>
<div class="form-group">
<strong>Phone*:</strong><br/> 
<input type="text" name="phone" id="ib" value="" required>
</div>
<hr>
<?php
while($r=mysqli_fetch_array($s))
{
?> 
<h3>Ques : <?php echo $r['ques'];?></h3>
<ol>
<div class="option">
<li>
<input type="radio" name="<?php echo $r['qid'] ?>" value="1" /><?php echo $r['opt1'];?>
</li>
</div>
<div class="option">
<li>
<input type="radio" name="<?php echo $r['qid'] ?>" value="2" /><?php echo $r['opt2'];?>
</li>
</div>
<div class="option">
<li>
<input type="radio" name="<?php echo $r['qid'] ?>" value="3" /><?php echo $r['opt3'];?>
</li>
</div>
<div class="option">
<li>
<input type="radio" name="<?php echo $r['qid'] ?>" value="4" /><?php echo $r['opt4'];?>
</li>
</div>
</ol>
</div>
<hr>
<br>
<?php
}
?>
<input type="submit" value="Submit" name="submit" id="btn"/>
</form>
</body>
</html>