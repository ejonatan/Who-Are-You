<?php
session_start();
?>

<!--  Authors: Emily Jonatan
			   Pranav Talwar
      File: home.php
 -->
 
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
		    echo '<button onclick="window.location.href = \'signup.php\'">Sign Up</button>';
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
			LEADERBOARD<br><br>
			<table style="width:100%">
				<tr>
				    <th>Username</th> 
				    <th>Typing Score</th>
				    <th>Clicking Score</th>
				    
				</tr>
				<tr>
				    <td>em</td>
				    <td>63</td>
				    <td>78</td>
				</tr>
				<tr>
				    <td>printoff</td>
				    <td>52</td>
				    <td>69</td>
				</tr>
			</table>
		</div>
		<div class="main about">
			About Us
			<hr>
			Are you looking to test your
			computer-using dexterity skills? To
			prove to a friend that you are better / faster
			than them or just casualy work on improving 
			your skills; then you came to the right place! 
			We provide 2 tests, a typing test and a clicking test.
			(more coming soon!) Enjoy! :) 
		</div>
	</div>

</body>
</html>