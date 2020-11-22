<?php
session_start();
include("db.php");

if(isset($_POST['username'])){ $username = $_POST['username']; }
if(isset($_POST['login'])){ $login = $_POST['login']; }
if(isset($_POST['email'])){ $email = $_POST['email']; }
if(isset($_POST['password'])){ $password = $_POST['password']; }

$login = trim(strip_tags($login));
$username = trim(strip_tags($username));
$password = md5($password);

if(!empty($login) AND !empty($username) AND !empty($email) AND !empty($password)) {
	$sql = "INSERT INTO userstable(username, login, email, password) VALUES('$username', '$login', '$email','$password')";
	$result = mysqli_query($db, $sql);
	if($result = true){
		$_SESSION['error']=
		"<div class='alert alert-success' role='alert'>Successfully Registration</div>";
		header('Location:registr.php');
	}else {
		echo "Error location";
	}
	
}else { $_SESSION['error']=
	"<div class='alert alert-danger' role='alert'>
  You need to fill up all categories
</div>";
	header('Location:registr.php');
}

?>