<?php
session_start();
?>

<!--  Authors: Emily Jonatan
			   Pranav Talwar
      File: signup.php
 -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<title>Dexterity Test - Sign Up</title>
</head>
<body>

	<script>

function submit() {
	var username = document.getElementById("user").value;

	var password = document.getElementById("pass").value;

	var fname = document.getElementById("firstName").value;

	var lname = document.getElementById("lastName").value;

	var age = document.getElementById("age").value;

	var ajax = new XMLHttpRequest();

	// Send query parameter to controller.php
	ajax.open("GET", "controller.php?mode=" + "signup" + "&username=" + username + "&password="
			+ password + "&fname=" + fname + "&lname=" + lname + "&age=" + age, true);
	ajax.send();

	// Execute when server responds
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			var resultsDiv = document.getElementById("results");
								
			window.location.href = 'profile.php';
			resultsDiv.innerHTML = ajax.responseText;
		}
	};
}

</script>

	<div class="header">

		<p>Dexterity Test</p>

		<button onclick="window.location.href = 'home.php'">Home</button>

	</div>

	<div class="maincontain">


		<div class="main login_signup_header">
			Sign Up<br> <small>Or click <a href="login.html">here</a> to log in.
			</small>
		</div>
		<div class="spacer"></div>
		<div class="main signup_login">
			Username<br> <input type="text" id="user" required> <br> <br>
			Password<br> <input type="text" id="pass" required> <br> <br> First
			Name<br> <input type="text" id="firstName" autocomplete='given-name'>
			<br> <br> Last Name<br> <input type="text" id="lastName"
				pattern="[A-Z a-z]*" required autocomplete='given-name'> <br> <br>
			Age<br> <input type="text" id="age" required> <br> <br>
			<button class="buttontype" onclick="submit();">OK</button>
		</div>

	</div>

</body>
</html>