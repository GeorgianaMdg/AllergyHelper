<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<title>AllergyHelp - Login</title>
</head>
<body id="login">
		<form method="post">
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
			<button type="submit" class="btn" name="login_user" style="top: 77%; left: 19%; ">Login</button>
			</div>
			</form>
			<?php
				session_start();
				$username = "";
				$email    = "";
				$errors = 0;
				$_SESSION['success'] = "";
				
				$db = mysqli_connect('localhost', 'root', '', 'testdb');
				if (isset($_POST['login_user'])) {
					$username = mysqli_real_escape_string($db, $_POST['username']);
					$password = mysqli_real_escape_string($db, $_POST['password']);
					if (empty($username)) {
						//eroare
						$errors++;
					}
					if (empty($password)) {
						//eroare
						$errors++;
					}
					if ($errors == 0) {
						$password = md5($password);
						$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
						$results = mysqli_query($db, $query);
						if (mysqli_num_rows($results) == 1) {
							$_SESSION['username'] = $username;
							header('location: home.php');
						}else {
						//erorare
					}
					}
				}
			 ?>
		
		
</body>
</html>