<?php

session_start();
header('location:quiz.php');

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


$q = "INSERT INTO `user`(`name`, `email`, `phno`, `clgname`, `age`) VALUES ('$name', '$email', '$phno', '$clgname', $age)";
mysqli_query($con,$q);
	
?>

