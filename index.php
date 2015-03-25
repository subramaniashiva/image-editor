<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Image Editor | Vikas Lalwani</title>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link href = "css/main.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<div class="wrapper">
			<h1>Image Editor</h1>
			
			<!--Form for collecting image URL -->
			<form id="urlBox" class = "center">
				<input class="url-box" type="url" id="imgUrl" placeholder="Paste any image link and hit enter to start playing.">
			</form>
			<a href="selfie.html" target="_self" class="selfie-link">Take a selfie</a>
			<!--Controls for CSS filters via range input-->
			<div class="sliders">
				<form id="imageEditor">
					<p>
						<label for="gs">Grayscale</label>
						<input id="gs" name="gs" type="range" min=0 max=100 value=0>
					</p>

					<p>
						<label for="blur">Blur</label>
						<input id="blur" name="blur" type="range" min=0 max=10 value=0>
					</p>

					<p>
						<label for="br">Brightness</label>
						<input id="br" name="br" type="range" min=0 max=200 value=100>
					</p>

					<p>
						<label for="ct">Contrast</label>
						<input id="ct" name="ct" type="range" min=0 max=200 value=100>
					</p>

					<p>
						<label for="huer">Hue Rotate</label>
						<input id="huer" name="huer" type="range" min=0 max=360 value=0>
					</p>

					<p>
						<label for="opacity">Opacity</label>
						<input id="opacity" name="opacity" type="range" min=0 max=100 value=100>
					</p>

					<p>
						<label for="invert">Invert</label>
						<input id="invert" name="invert" type="range" min=0 max=100 value=0>
					</p>

					<p>
						<label for="saturate">Saturate</label>
						<input id="saturate" name="saturate" type="range" min=0 max=500 value=100>
					</p>

					<p>
						<label for="sepia">Sepia</label>
						<input id="sepia" name="sepia" type="range" min=0 max=100 value=0>
					</p>

					<input type="reset" form="imageEditor" id="reset" value="Reset" />

				</form>
			</div>	

			<!--container where image will be loaded-->
			<div id="imageContainer" class="center">
				<img src=<?php 
					if (isset($_POST["value"]) && !empty($_POST["value"])) {
    				echo "\"".$_POST['value']."\"";
    			} else{  
    				echo "image/puppies.jpg";
					}
				?> />
			</div>
		</div>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		
		<!-- Google Analytics Tracking Code -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-58515343-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>