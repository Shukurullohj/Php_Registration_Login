<?php
session_start(); 
if(!empty($_POST['username']) AND !empty($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);

	include("db.php");
	$sql = "SELECT * FROM userstable WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
		$_SESSION['error']=
		"<div class='alert alert-success' role='alert'>Successfully Entered</div>";
		header('Location:login.php');
}else { $_SESSION['error']=
	"<div class='alert alert-danger' role='alert'>You need to fill up all categories</div>";
	header('Location:login.php');
}
}
?>
