<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "roses";

// create connection
$con = mysqli_connect($serverName,$userName,$password,$dbName);

if (mysqli_connect_errno()) {
	echo "Failed to connect!";
	exit();
}

 
 ?>
 <form action="" method='post' enctype="multipart/form-data">

 <input type='file' name= 'file[]' id='file' multiple>

 <input type='submit'name= 'submit' value='upload'>
