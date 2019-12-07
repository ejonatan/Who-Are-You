<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<title>Who Are You? - Your Profile</title>
</head>
<body>

	<div class="header">

		<p>Who Are You?</p>

		<button onclick="window.location.href = 'home.html'">Home</button>

	</div>

	<div class="maincontain">
		<div class="main profile">
			<br> <img src="images/profilepic.png" width="100px" height="100px">

			<?php
			$username = $_POST["username"];
			$password = $_POST["password"];
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $age = $_POST["age"];
            echo "<br>Username: " . $username;
            echo "<br>Password: " . str_repeat("*", strlen($password));
            echo "<br>Name: " . $firstName . " " . $lastName;
            echo "<br>Age: " . $age;
            ?>
		</div>
		<div class="main stats">
			<br> Ranks & Stats
			<hr>
		</div>
	</div>

</body>
</html>