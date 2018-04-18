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
  color: white;
  font-size: 14;
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
  color: white;
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
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
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
        <label for="fname">. </label>
        <center><img src="img/icon-allergy.jpeg" width="40%" height="30%"></center>
      </div>

	 </form>
	<form id="notifications">
    <div class="row">
      <div class="column">
        <p>Allergies, also known as allergic diseases, are a number of conditions caused by hypersensitivity of the immune system to something in the environment that usually causes little or no problem in most people. These diseases include hay fever, food allergies, atopic dermatitis, allergic asthma, and anaphylaxis. Symptoms may include red eyes, an itchy rash, sneezing, a runny nose, shortness of breath, or swelling.
        </p>
        <p> Diagnosis is typically based on a person's medical history. Further testing of the skin or blood may be useful in certain cases. </p>
        <p>Allergen immunotherapy, which gradually exposes people to larger and larger amounts of allergen, is useful for some types of allergies such as hay fever and reactions to insect bites. Its use in food allergies is unclear. Allergies are common. In the developed world, about 20% of people are affected by allergic rhinitis, about 6% of people have at least one food allergy, and about 20% have atopic dermatitis at some point in time. Depending on the country about 1–18% of people have asthma. Anaphylaxis occurs in between 0.05–2% of people. Rates of many allergic diseases appear to be increasing.</p>
    </div>
    <div class="column">
      <center><img src="img/allergies.JPG"></center>
    </div>
  </div>
	</form>
	<form id="subscriptions">
        <select id="allergyList" name="allergyList"  onchange="myFunction()">
            <option value="  " class="a1">Allergies..</option>
            <option value="Dust mites are microscopic organisms that feed off of house dust and the moisture in the air. They are one of the most common indoor allergens, and symptoms can be present year round. In addition to allergic rhinitis, dust mite allergy can also trigger asthma and flares of eczema. People with dust mite allergies often suffer the most inside their own homes or in other people’s homes. Oddly enough, their symptoms often worsen during or immediately after vacuuming, sweeping and dusting. The process of cleaning can stir up dust particles, making them easier to inhale.

People with dust mite allergies often suffer the most inside their own homes or in other people’s homes. Oddly enough, their symptoms often worsen during or immediately after vacuuming, sweeping and dusting. The process of cleaning can stir up dust particles, making them easier to inhale." class="a2">Dust allergy</option>
            <option value="More than 50 million Americans have an allergy of some kind. Food allergies are estimated to affect 4 to 6 percent of children and 4 percent of adults, according to the Centers for Disease Control and Prevention.

Food allergy symptoms are most common in babies and children, but they can appear at any age. You can even develop an allergy to foods you have eaten for years with no problems. Learn more about the types of food allergies." class="a3">Food allergy</option>
            <option value="Most people are not allergic to insect stings. Recognizing the difference between an allergic reaction and a normal reaction will reduce anxiety and prevent unnecessary medical expense.

Thousands of people enter hospital emergency rooms or urgent care clinics every year suffering from insect stings. It has been estimated that potentially life-threatening allergic reactions occur in 0.4% – 0.8% of children and 3% of adults. At least 90 – 100 deaths per year result from insect sting anaphylaxis." class="a4">Insect sting allergy</option>
            <option value="If your nose runs, your eyes water or you start sneezing and wheezing after petting or playing with a dog or cat, you likely have a pet allergy. A pet allergy can contribute to constant allergy symptoms, as exposure can occur at work, school, day care or in other indoor environments, even if a pet is not present." class="a5">Pet allergy</option>
            <option value="The symptoms can occur alone but usually accompany the sneezing, sniffling or stuffy nose found with nasal allergies." class="a6">Eye allergy</option>
            <option value="People with drug allergies may experience symptoms regardless of whether their medicine comes in liquid, pill or injectable form." class="a7">Drug allergy</option>
            <option value="If you sneeze a lot, if your nose is often runny or stuffy, or if your eyes, mouth or nose often feel itchy, you may have allergic rhinitis, a condition that affects 40 million to 60 million Americans.

Allergic rhinitis develops when the body’s immune system becomes sensitized and overreacts to something in the environment that typically causes no problem in most people.

Allergic rhinitis is commonly known as hay fever. But you don’t have to be exposed to hay to have symptoms. And contrary to what the name suggests, you don’t have to have a fever to have hay fever." class="a8">Allergic rhinitis</option>
            <option value="Allergic reactions to latex may be serious and can very rarely be fatal. If you have latex allergy you should limit or avoid future exposure to latex products.

People who are at higher risk for developing latex allergy include:

Health care workers and others who frequently wear latex gloves
People who have had multiple surgeries (for example, 10 or more), such as children with spina bifida
People who are often exposed to natural rubber latex, including rubber industry workers
People with other allergies, such as hay fever (allergic rhinitis) or allergy to certain foods" class="a9">Latex allergy</option>
            <option value="Mold allergies can be tough to outrun. The fungus can grow in your basement, in your bathroom, in the cabinet under your sink where a leak went undetected, in the pile of dead leaves in your backyard and in the field of uncut grass down the road.

There are roughly 1,000 species of mold in the United States — many of which aren’t visible to the naked eye. As tiny mold spores become airborne, they can cause allergic reactions in people who have mold allergies." class="a10">Mold allergy</option>
            <option value="Sinus infection (known as sinusitis) is a major health problem. It afflicts 31 million people in the United States. Americans spend more than $1 billion each year on over-the-counter medications to treat it. Sinus infections are responsible for 16 million doctor visits and $150 million spent on prescription medications. People who have allergies, asthma, structural blockages in the nose or sinuses, or people with weak immune systems are at greater risk." class="a11">Sinus allergy</option>
            <option value="Cockroaches aren’t just unsightly pests, crawling across your kitchen floor in the middle of the night. They can be an allergy trigger as well.

The saliva, feces and shedding body parts of cockroaches can trigger both asthma and allergies. These allergens act like dust mites, aggravating symptoms when they are kicked up in the air.

The National Pest Management Association reports that 63 percent of homes in the United States contain cockroach allergens. In urban areas, that number rises to between 78 and 98 percent of homes" class="a12">Cockroach allergy</option>
        </select> 

          <p id="demo"></p>
   <script>
function myFunction() {

    var x = document.getElementById("allergyList").value;
    document.getElementById("demo").innerHTML = x ;
}
</script>


	</form>
  <div>    

    <div style="position: absolute; bottom: 5px; color: gray;">
    More informations about allergies on: <a href="https://acaai.org/allergies/types" target="_blank">https://acaai.org/allergies/types</a>

    </div>
</div>
</body>
</html>



 