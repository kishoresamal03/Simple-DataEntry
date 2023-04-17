<?php
include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
	*{
		margin:0;
		padding:0;
		
	}
	section{
		display:flex;
		justify-content: center;
		align-items: center;
		width:100%;
		height:100vh;
		background-image:linear-gradient(rgba(0,0,50,0.6),rgba(0,0,50,0.8)),url('bg.jpg');
		background-position: center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	.head{
		position:absolute;
		top:50%;
		left:50%;
		transform: translate(-50%, -50%);
		width:400px;
		height:500px;
		padding:80px 40px;
		border-radius: 20px;
		border:2px solid #F9F9F9;
		box-sizing:border-box;
		background:transparent;
		backdrop-filter:blur(15px);
	}
	.head h2{
		margin:0;
		padding: 0 0 20px;
		color:#fff;
		text-align:center;
		text-transform:uppercase;
		
	}
	.head p{
		margin:0;
		padding: 0;
		font-weight:bold;
		color:#fff;
	}
	.head input{
		width:100%;
		margin-bottom:20px;
		background:rgba(255,255,255,0.8);
		color:#000;
		border-radius:3px;
	}
	.head input(type=text),
	.head input(type=email),
	.head input(type=number){
		border:none;
		border-bottom:1px solid #fff;
		background:#fff;
		outline: none;
		height:100px;
		font-size:20px;
	}
	.head .btn{
		width:100%;
		height:40px;
		color:aliceblue;
		font-size:15px;
		background-color:#0087DB;
		border-radius:40px;
		outline:none;
		margin-top:10px;
		font-weight:bold;
	}
</style>

</head>

<body>
<section>
<div class="head">
	<h2>Input Data</h2>
		<form action="reg.php" method="POST">

			<p>Name</p>
			  <input type="text" name="inputname" required>

			<p>Email</p>
			  <input type="email" name="inputemail" required>

			<p>Mobile</p>
			  <input type="number" name="inputnumber" required>

		  <button type="submit" class="btn">Submit</button>

		</form>
	
</div>
</section>	
		
</body>
</html>