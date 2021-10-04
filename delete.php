<?php 
	include 'db.php';
	
	$news_id=$_POST['news'];
	$sql="DELETE FROM `users` WHERE `id`=$news_id";
	if ($conn->query($sql)===TRUE) {
		echo "record deleted";
	}
?>