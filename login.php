<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<h2>Login</h2>
				<form action="login_check.php" method="POST">
					<?php if(isset($_SESSION['error'])) {echo $_SESSION['error'];}?>
					<label for="username">Username</label>
					<input class="form-control" type="text" name="username">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password">
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" value="Sign up" name="submit">
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

</body>
</html>

<?php unset($_SESSION['error']);