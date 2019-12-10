<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<title>Who Are You? - Sign Up</title>
</head>
<body>

<?php
session_start();
?>

	<div class="header">

		<p>Who Are You?</p>

		<button onclick="window.location.href = 'home.html'">Home</button>

	</div>

	<div class="maincontain">

		<form action="profile.php" method="post">
			<div class="main login_signup_header">
				Sign Up<br>
				<small>Or click <a href="login.html">here</a> to log in.
				</small>
			</div>
			<div class="spacer"></div>
			<div class="main signup_login">
				Username<br> <input type="text" id="user" name="username"
					required> <br> <br> Password<br> <input
					type="text" id="pass" name="password" required> <br> <br>
				First Name<br> <input type="text" id="firstName"
					name="firstName" pattern="[A-Z a-z]*" required
					autocomplete='given-name'> <br> <br> Last Name<br>
				<input type="text" id="firstName" name="lastName"
					pattern="[A-Z a-z]*" required autocomplete='given-name'> <br>
				<br> Age<br> <input type="text" id="age" name="age"
					pattern="[0-9]{1-2}" required> <br> <br> <input
					class="buttontype" type="submit" name="signup" value="OK">
					<?php
                    if(isset($_SESSION ['registrationError'])) {
                        echo $_SESSION ['registrationError'];
                        unset($_SESSION ['registrationError']);
                    }
                    ?>
			</div>
		</form>
	</div>

</body>
</html>