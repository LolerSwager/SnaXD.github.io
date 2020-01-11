<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Ræb, og, skammel,">
		<meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/scroll.css">
		<title>Reb og Skammel</title>
	</head>
	<body>
		<?php require'header.php'; ?>

<div id="container">
    <video autoplay="true" id="videoElement">
    </video>
	
	<div id="billed-Frame">
		<img src="Lokke.png" id="billed-Lokke">
	</div>
</div>


<script>
var video = document.querySelector("#videoElement");
 
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
 navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
    });
}
</script>

<audio loop autoplay preload="auto">
	<source src="TieANoose.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
</audio>

		<p> Virker det ikke? Klik <a href="https://snaxd.github.io/lokken.html" target="_blank">HER!</a>
      <?php require'footer.php'; ?>
    </body>
</html>