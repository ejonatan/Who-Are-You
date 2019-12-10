<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<title>Who Are You? - Typing Game</title>
</head>
<body>

	<script>
		function startGame() {
			promptDiv = document.getElementById("prompt");
			promptDiv.classList.add("destroy");

			countDiv = document.getElementById("countdown");
			countDiv.classList.remove("destroy");
			
			timer();

		}
		
		function timer() {
			countDiv = document.getElementById("countdown");
			var timeleft = 60;
			typeDiv = document.getElementById("type");
			typeDiv.classList.remove("destroy");
			var downloadTimer = setInterval( function() {
				timeleft -= 1;
				countDiv.innerHTML = "<p>" + timeleft + "</p>";
				if (timeleft < 0) {
					clearInterval(downloadTimer);
					countDiv.innerHTML = "Finished"
				}
			}, 1000);
		}
	</script>

	<div class="header">

		<p>Who Are You?</p>

		<button onclick="window.location.href = 'home.html'">Home</button>

	</div>

	<div class="maincontain">

		<div class="typingdisc" id="prompt">
			Typing Test
			<hr>
			In this game, random words will pop up from the 
			English Dictionary. You have a minute to type 
			as many words as you can, correctly, and will be 
			given a score based on how many you get right. 
			Ready? 
			<button onclick="startGame();">Start</button>
		</div>
		<div class="clickgame destroy" id="countdown">
		</div>
		<input class="inputdiv destroy" type= "text" id="type"/>
		
	</div>
	
    <?php
    function gettingRandomWord() {
        $arr = file("dictionary.txt");
        $randomNumber = rand(0, size($arr));
    }
    ?>
    
    
</body>
</html>
