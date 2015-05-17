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
	<script type="text/javascript" src="js/toppicks.js"></script>
	<script type="text/javascript" src="js/dom.js"></script>
	<title>NBA Polska</title>
</head>

<body>

<?php include "menu.php"; ?>

	<section>
        <?php include "stylesheetselect.php"; ?>
		<h1>Stwórz swoją listę ulubionych drużyn</h1>
		<article>
		<p>Wybiesz drużynę i kliknij.</p>
		<select id="teamChoice" onchange="setTeam();">
			<option>Boston Celtics</option>
			<option>Brooklyn Nets</option>
			<option>New York Knicks</option>
			<option>Philadelphia 76ers</option>
			<option>Toronto Raptors</option>
			<option>Chicago Bulls</option>
			<option>Cleveland Cavaliers</option>
			<option>Detroit Pistons</option>
			<option>Indiana Pacers</option>
			<option>Milwaukee Bucks</option>
			<option>Atlanta Hawks</option>
			<option>Charlotte Hornets</option>
			<option>Miami Heat</option>
			<option>Orlando Magic</option>
			<option>Washington Wizards</option>
			<option>Dallas Mavericks</option>
			<option>Houston Rockets</option>
			<option>Memphis Grizzlies</option>
			<option>New Orleans Pelicans</option>
			<option>San Antonio Spurs</option>
			<option>Denver Nuggets</option>
			<option>Minnesota Timberwolves</option>
			<option>Portland Trail Blazers</option>
			<option>Oklahoma City Thunder</option>
			<option>Utah Jazz</option>
			<option>Golden State Warriors</option>
			<option>Los Angeles Clippers</option>
			<option>Los Angeles Lakers</option>
			<option>Phoenix Suns</option>
			<option>Sacramento Kings</option>
		</select>
		<p id=teamSelect>
			<ul id="teamlist">
			</ul>
		</p>	
			<button onclick="insert();">Wstaw</button>
			<button onclick="insertTop();">Wstaw na początek</button>
			<button onclick="replace();">Zamień</button>
			<button onclick="removeTeam();">Usuń</button><br>
			<p>Kliknij aby wstawić lub kliknij i przytrzymaj: <br>
			-Alt aby dodać na początek<br>
			-Ctrl aby zmienić ostatni<br>
			-Shift aby usunąć<br>
			</p>
			<button onclick="allNode();">Przycisk uniwersalny</button>
		</article>
	</section>

<?php include "footer.php"; ?>
	
</body>

</html>
