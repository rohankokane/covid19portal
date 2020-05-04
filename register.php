<?php

session_start();
// header('location:home.php');

$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'quizdb');

	$name = $_POST['name'];
    $email = $_POST['email'];

	

	 echo $name;
	 echo $email;

     //we have to store the user details into the datbase
?>