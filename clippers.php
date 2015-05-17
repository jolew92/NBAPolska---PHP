<?php
include "cookies.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta name="author" content="Joanna Lewicka, Tomasz Pawełczyk">
	<meta name="description" content="Polska strona poświęcona NBA. Najnowsze informacje, ciekawostki i statystyki.">
	<meta name="keywords" content="koszykówka, nba, basketball, sport">
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="image/icon.png">
    <link rel="stylesheet" type="text/css" media="screen" title="User Defined Style" <?php print('href="style/'.$sitestyle.'"');?>/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<title>NBA Polska</title>
</head>

<body>

<?php include "menu.php"; ?>
	<section>
        <?php include "stylesheetselect.php"; ?>
		
		<h1>Los Angeles Clippers</h1>
	</section>
	
		<section class="flexbox">
    	<div id="flex1"><h1 style="margin-top:-5px"></h1><a href="image/cliproster.jpg" download="cliproster.jpg">
		<img class="images" src="image/cliproster.jpg" alt="Clippers" height=350 width=510></a></div>
      	<div id="flex2">Skład:
		<ol>
			<li>Matt Barnes</li>
			<li>Reggie Bullock</li>
			<li>Jamal Crawford</li>
			<li>Jared Cunningham</li>
			<li>Glen Davis</li>
			<li>Chris Douglas-Roberts</li>
			<li>Jordan Farmar</li>
			<li>Blake Griffin</li>
			<li>Spencer Hawes</li>
			<li>Joe Ingles</li>
			<li>DeAndre Jordan</li>
			<li>Chris Paul</li>
			<li>J.J. Redick</li>
			<li>Hedo Turkoglu</li>
			<li>Ekpe Udoh</li>
			<li>C.J. Wilcox</li>
		</ol>
		</div>
        <div>Opis</div>
        <div>Statystyki</div>
   		</section>

<?php include "footer.php"; ?>

</body>

</html>
