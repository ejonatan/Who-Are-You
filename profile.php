<?php
session_start();
?>
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
			echo "<br>Username: " . $_SESSION['user'];
			echo "<br>Password: " . str_repeat("*", strlen($_SESSION['pass']));
			echo "<br>Name: " . $_SESSION['fname'] . " " . $_SESSION['lname'];
			echo "<br>Age: " . $_SESSION['age'];
            ?>
		</div>
		<div class="main stats">
			<br> Ranks & Stats
			<hr>
		</div>
	</div>

</body>
</html>