<?php $errors = array(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<title>AllergyHelp - Login</title>
</head>
<body id="login">
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>
			<h1 id="hdr">Login Form</h1>
					<div class="input-group">
						<label>Username</label>
						<br>
						<input type="text" name="username" >
					</div>
					<div class="input-group">
						<label>Password</label>
						<br>
						<input type="password" name="password">
					</div>
				<div class="input-group">
			<button type="submit" class="btn button glow-button" name="login_user" style="top: 77%; ">Login</button>
			</div>
			</form>
			<?php
				session_start();
					$username = "";
					$email    = "";
					$_SESSION['success'] = "";
					$db = mysqli_connect('localhost', 'root', '', 'testdb');
					if (isset($_POST['login_user'])) {
						$username = mysqli_real_escape_string($db, $_POST['username']);
						$password = mysqli_real_escape_string($db, $_POST['password']);
						if (empty($username)) {
							array_push($errors, "Username is required");
						}
						if (empty($password)) {
							array_push($errors, "Password is required");
						}
						if (count($errors) == 0) {
							$password = md5($password);
							$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
							$results = mysqli_query($db, $query);

							if (mysqli_num_rows($results) == 1) {
								$_SESSION['username'] = $username;
								$_SESSION['success'] = "You are now logged in";
								header('location: home.php');
							}else {
								array_push($errors, "Wrong username/password combination");
						}
					}
				}
			 ?>
		
		
</body>
</html>