<?php
	$con=new mysqli('localhost','root','','kishore');
if($con->connect_error){
	echo "Can't connect";
}


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
	body{
		background-color:#fff;
	}
	.head{
		height:50px;
		display:flex;
		justify-content: center;
		text-align: center;
		background:rgba(20,117,238,0.44);
	}
	.head h1{
		font-family:"glass-antiqua";
		font-size:32px;
		font-display: block;
		font-weight: bold;
		color:#FFFFFF;
	}
	section{
		display:flex;
		justify-content: center;
		align-items: center;
		position:absolute;
		top:30%;
		left:50%;
		transform: translate(-50%, -50%);
		width:70%;
		height:500px;
		padding:80px 40px;
	}
	
</style>
	
</head>

<body>
	
		<div class="head">
			<h1>DATA</h1>
		</div>
	
	<section>
	
<table class="table table-bordered table-success text-center">
  <thead class="table-active table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tbody>
	  <?php

		$sql="SELECT * FROM `form`";
		$result=$con->query($sql);

		if($result->num_rows > 0){
			while($row=$result->fetch_assoc()){
		?>

    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
	  <td><?php echo $row['email']; ?></td>
	  <td><?php echo $row['mobile']; ?></td>
    </tr>
	  <?php
			}
	  ?>
  </tbody>
	<?php
		}else{
			echo "No record Found";
		}
	  ?>
</table>
		</section>
	
</body>
</html>