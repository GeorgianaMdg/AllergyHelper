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

<style type="text/css">

body {
	background-color: #191919;
	font-family: 'Josefin Sans', sans-serif;
}
input, select {
    font-family: 'Josefin Sans', sans-serif;
    width: 100%;
    font-size: 15px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    color: #ccc;
    background-color: #333333;
    box-sizing: border-box;
}

#settings {
  position: absolute;
  width: 30%;
  height: 80%;
  left: 3%;
  top: 10%;
  margin: 0px auto;
  padding: 20px;
  border-radius: 10px 10px 10px 10px;
  background: #202020;
}

#notifications {
	position: absolute;
  width: 61%;
  height: 40%;
  left: 35.5%;
  top: 10%;
  margin: 0px auto;
  padding: 20px;
  border-radius: 10px 10px 10px 10px;
  background: #202020;
}

#subscriptions {	
  position: absolute;
  width: 61%;
  height: 35%;
  left: 35.5%;
  top: 55%;
  margin: 0px auto;
  padding: 20px;
  border-radius: 10px 10px 10px 10px;
  background: #202020;
}

.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #04c981;
  border: none;
  border-radius: 5px;
  left: 93%; 
  top: 18%; 
  position: absolute;
  padding: 15px 150px;
  font-size: 20px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
}

.button {
 size: 100%;
 text-decoration: none;
 color: rgba(255, 255, 255, 1);
 background: #04c981;
 padding: 15px 30px;
 border-radius: 4px;
 text-transform: uppercase;
 transition: all 0.2s ease-in-out;
 font-weight: bold;
}
.glow-button:hover {
 color: rgba(255, 255, 255, 1);
 box-shadow: 0 5px 15px rgba(4, 201, 129, .4);
}

</style>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Allergy Helper - Home</title>
</head>

<body style="background-color: #191919;">
	<header>
		<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #232323;">
			<a class="navbar-brand" href="#">AllergyHelp</a>
			      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link " href="allergies.php">Allergy List</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <p style="color: white; text-align: center;">Logged in as: <strong><?php echo $_SESSION['username']; ?></strong></p>
      <a href="home.php?logout='1'" class="nav-link" style="color: white;">Logout</a>
    </form>

  </div>
		</nav>

	</header>
	 <form id="settings">
		  <div id="form">
        <form action="/action_page.php">
           <label for="fname">. </label>
           <input type="text" id="name" name="iname" placeholder="Username..">

          <label for="mail"> .</label>
          <input type="text" id="email" name="email" placeholder="Your email..">
          <label for="fname">. </label>
          <input type="password" id="password" name="password" placeholder="Password..">
          <label for="fname">. </label>
          <select id="gender" name="gender" >
            <option value="male">Select gender..</option>
            <option value="male">male</option>
            <option value="female">female</option>
      
          </select> 
          <label for="fname"> .</label>
          <input type="password" id="cpassword" name="cpassword" placeholder="Confirm password..">
   
          <label for="fname">. </label>
  
          <input type="submit" value="Save settings">
        </form>
      </div>
	 </form>
	<form id="notifications">

	</form>
	<form id="subscriptions">

	</form>
</body>
</html>