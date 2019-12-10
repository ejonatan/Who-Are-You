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

			wordDiv = document.getElementById("word");
			wordDiv.classList.remove("destroy");
			
			timer();
			word = getRandomWord();		
			
		}
		
		var score = 0;
 	    var correctList = [];
 	    var inputList = [];
 	    
		function timer() {
			countDiv = document.getElementById("countdown");
			var timeleft = 61;
			typeDiv = document.getElementById("type");
			typeDiv.classList.remove("destroy");
			var downloadTimer = setInterval( function() {
				timeleft -= 1;
				countDiv.innerHTML = "<p>" + timeleft + "</p>";
				if (timeleft < 0) {
					clearInterval(downloadTimer);
					countDiv.innerHTML = "Finished! Score: " + getScore();
				}
			}, 1000);
		}

		function getScore() {
			for (i = 0; i < correctList.length - 1; i ++) {
				if (inputList.includes(correctList[i])) {
					score += 1;
				}
			}
			return score;
		}

	    function getRandomWord() {
			var arr=["a", "about", "all", "also", "and", "as", "at", "be", "because", "but", "by", "can", "come", "could", "day", "do", "even", "find", "first", "for", "from", "get", "give", "go", "have", "he", "her", "here", "him", "his", "how", "I", "if", "in", "into", "it", "its", "just", "know", "like", "look", "make", "man", "many", "me", "more", "my", "new", "no", "not", "now", "of", "on", "one", "only", "or", "other", "our", "out", "people", "say", "see", "she", "so", "some", "take", "tell", "than", "that", "the", "their", "them", "then", "there", "these", "they", "thing", "think", "this", "those", "time", "to", "two", "up", "use", "very", "want", "way", "we", "well", "what", "when", "which", "who", "will", "with", "would", "year", "you", "your"];
			var randomnum = Math.floor(Math.random() * 101);
			correctWord = arr[randomnum];
	    	document.getElementById("word").innerHTML = correctWord;
	    	inputWord = document.getElementById("type").value;


	    	correctList.push(correctWord);
	    	inputList.push(inputWord);

	    	
			document.getElementById('type').value='';
			return arr[randomnum];
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
		<div class="main destroy" id="word"></div>
		<div class="clickgame destroy" id="countdown">
		</div>
		<input class="inputdiv destroy" type= "text" id="type" onchange="getRandomWord()"/>
	</div>
    
</body>
</html>
