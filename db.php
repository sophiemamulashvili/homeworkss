<?php
 	$servername="localhost";
 	$username="root";
 	$password="";
 	$dbname="hm1";

    $sql = "SELECT * FROM `users`";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo $conn->connect_error;
    };
?>