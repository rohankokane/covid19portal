<?php

session_start();
header('location:add-post.php');

$con = mysqli_connect('localhost','root');
if($con){
	echo"connection";}

mysqli_select_db($con,'quizdb');

$name = $_POST['name'];
$email = $_POST['email'];
$phno =$_POST['contact'];
$clgname = $_POST['clgname'];
$age = $_POST['age'];
$_SESSION['username']=$name;
$_SESSION['email']=$email;

$q = "INSERT INTO `postuser`(`name`, `email`, `phno`, `clgname`, `age`) VALUES ('$name', '$email', '$phno', '$clgname', $age)";
mysqli_query($con,$q);
	
?>
