<?php
	$name=val($_POST['inputname']);
	$email=val($_POST['inputemail']);
	$mobile=val($_POST['inputnumber']);

function val($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

include 'connection.php';

$sql="INSERT INTO `form`(`name`, `email`, `mobile`) VALUES ('$name','$email','$mobile')";

if($con->query($sql)===TRUE){
	echo "Registered Successfully";
}else{
	echo "Something went wrong!!!";
}
	
	$con->close();
	?>