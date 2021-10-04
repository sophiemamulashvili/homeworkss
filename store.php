<?php
	include 'db.php';
	if (!isset($_POST['name'],$_POST['surname'],$_POST['birthday'])) {
		die("required fileds are missing");
	}
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$surname=$_POST['surname'];
	$birthday=$_POST['birthday'];

	$sql="INSERT INTO `users`(`name`, `surname`, `birthday`) 
	VALUES ('$name','$surname','$birthday')";
	if ($conn->query($sql)===TRUE) {
		echo "record added";
	}
?>