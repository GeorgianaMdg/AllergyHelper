<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<title>AllergyHelper - Register</title>
</head>
<body id="register">
		<form method="post" style="width: 30%; height: 60%; top: 20%;" action="register.php">
		<h1 id="hdr">Register Form</h1>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" style="top: 81%; left: 15%" name="register_user">REGISTER</button>
		</div>
	</form>
	<?php
	$username = "";
	$email    = "";
	$errors = 0;
	$db = mysqli_connect('localhost', 'root', '', 'testdb');
	if (isset($_POST['register_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		if (empty($username)) {
			//eroare
			$errors++;
		}
		if (empty($email)) {
			//eroare
			$errors++;
		}
		if (empty($password_1)) {
			//eroare
			$errors++;
		}
		if ($password_1 != $password_2) {
			//eroare
			$errors++;
		}
		if($errors == 0) {
			$query = "SELECT * FROM users WHERE username='$username'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				//eroare : userulname-ul este deja luat
				$errors++;
			}
			$query = "SELECT * FROM users WHERE email='$email'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				//eroare : emailul este deja luat
				$errors++;
			}
		}
		if($errors == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);
			$_SESSION['username'] = $username;
			header('location: home.php');
		}
	}
	?>
</body>
</html>