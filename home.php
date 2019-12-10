<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<title>Dexterity Test - Homepage</title>
</head>
<body>

<script>

function logOut() {
	window.location.href = 'logout.php';
}

</script>

	<div class="header">

		<p>Dexterity Test</p>
		
		<?php 
		if ( isset($_SESSION['id']) ) {
		    echo '<button onclick="window.location.href = \'profile.php\'">Profile</button>';
		    echo '<button onclick="logOut();">Log Out</button>';
		} else {
		    echo '<button onclick="window.location.href = \'login.html\'">Log In</button>';
		    echo '<button onclick="window.location.href = \'signup.html\'">Sign Up</button>';
		}
		?>		

	</div>

	<div class="maincontain">

		<div class="main games">
			<button class="buttonleft"
				onclick="window.location.href = 'clickgame.html'">Clicking Game</button>
			<button class="buttonright"
				onclick="window.location.href = 'typegame.php'">Typing Game</button>
		</div>
		<div class="spacer"></div>
		<div class="main leaderboard">
			LEADERBOARD
			<hr>
		</div>
		<div class="main about">
			About Us
			<hr>
			Are you looking to test your computer-using dexterity SKILLZ? You
			came to the right place!!!! Get ready to show your mettle through
			INTENSE clicking and typing GAMEZ and beat your nerd friends!!!!!!
			fuck me
		</div>
	</div>

</body>
</html>