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
	<script type="text/javascript" src="js/stylecreator.js"></script>
	<title>NBA Polska</title>
</head>

<body>

<?php include "menu.php"; ?>

	<section>
        <?php include "stylesheetselect.php"; ?>
	
		<h1 id="hcolor">Kreator stylu</h1>
		<article>
		<label id="label1" for="colorpicker">Wybierz kolor tła: </label>
		<input id="colorpicker" type="color" onchange="changeBackground();"><br><br>
		<label id="label2" for="colorpicker2">Wybierz kolor tekstu: </label>
		<input id="colorpicker2" type="color" onchange="changeTextColor();"><br><br>
		<select id="fontchanger" onchange="fontchange()">
		<option>Arial</option>
		<option>Courier New</option>
		<option>Times New Roman</option>
		<option>Segoe UI</option>
		</select>
		</article>
	</section>

<?php include "footer.php"; ?>

	
</body>

</html>
