<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Allergy Helper - Home</title>
</head>
<body>
	<?php if(isset($_SESSION['username'])) : ?>
		<h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
		<h1> <a href="home.php?logout='1'" style="color: red;">logout</a> </h1>
	<?php endif ?>
</body>
</html>