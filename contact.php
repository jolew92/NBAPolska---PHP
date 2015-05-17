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
	<script type="text/javascript" src="js/prompt.js"></script>
	<title>NBA Polska</title>
</head>

<body>

<?php include "menu.php"; ?>
	<section>
        <?php include "stylesheetselect.php"; ?>

		<h1>Kontakt</h1>
		<article>
		<form method="post" action="mailto:joannalewicka@outlook.com?subject=NBA%20Polska" autocomplete="on">
			<label id="Label1">Imię:</label><input name="Text1" type="text" autofocus/><br><br>
			<label id="Label2">Nazwisko:</label><input name="Text2" type="text" required/><br><br>
			<label id="Label3">Data urodzin:</label>
			<input name="Text3" type="text" pattern="\d{2}" maxlength="2" size="2" />
			<input list="month" size="11">
			<input name="Text4" type="text" pattern="\d{4}" maxlength="4" size="4"/><br><br>
			<label id="Label4">E-mail:</label>
			<input type="email" required/><br><br>
			<label id="Label5">Telefon:</label>
			<input type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{3}"/><label style="font-size:1em; color:skyblue"> Format: 999-999-999</label><br><br>
			<label id="Label6">Treść wiadomości:</label><br>
			<textarea name="TextArea1" cols="50" rows="10"></textarea><br><br>
			<input type="text" disabled><br><br> 
			<input name="Submit1" type="submit" value="Wyślij" /><input name="Reset1" type="reset" value="Reset" />
			</form>
		</article>
	</section>

<?php include "footer.php"; ?>

	<datalist id="month">
		<option>styczeń</option>
		<option>luty</option>
		<option>marzec</option>
		<option>kwiecień</option>
		<option>maj</option>
		<option>czerwiec</option>
		<option>lipiec</option>
		<option>sierpień</option>
		<option>wrzesień</option>
		<option>październik</option>
		<option>listopad</option>
		<option>grudzień</option>
	</datalist>


</body>

</html>
