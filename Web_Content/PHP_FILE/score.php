<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Game Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../CSS_FILE/style.css">
</head>
<body>
<header font-text=20px>EINSTEIN'S PUZZLE</header>

<div class="gamelogo"></div>
<div class ="button_contains"><a href="../HTML_FILE/menu.html"><button class="ibutton">Menu</button></a></div>
<?php
session_start();
if(isset($_SESSION['score']) && $_SESSION['score']==1) {
	echo "<img src=\"../image/yougood.jpg\" class=\"scoreContains\">";
	echo "<audio src=\"../image/right.mp3\" autoplay>
	<p>If you are reading this, it is because your browser does not support the audio element.</p>
	<embed src=\"../music/wrong.mp3\" hidden=\"true\"/>
	</audio>";
}
else{
	echo "<img src=\"../image/yousuck.jpg\" class=\"scoreContains\">";
	echo "<audio src=\"../music/wrong.mp3\" autoplay>
	<p>If you are reading this, it is because your browser does not support the audio element.</p>
	<embed src=\"../music/wrong.mp3\" hidden=\"true\"/>
	</audio>";
}

?>

<h1>.   </h1>
<h1>.   </h1>
<h1>.   </h1>
<h1>.  </h1>

<div class="footer"><span>Powered By: Inifite Loop </span>
<ul id="icon-list">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-instagram"></i></a></li>
</ul>
</div>    
</body>
</html>