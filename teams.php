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
	
<h1>Drużyny</h1>
<article class="konferencja">
	<a href="#zachod" id="zachodlink">Zachodnia</a>
	<h1 id="wschod">Konferencja Wschodnia</h1>
		<table class="tg_1">
		  <tr>
		    <th class="tg_1">Dywizja</th>
		    <th class="tg_1">Drużyna</th>
		    <th class="tg_1">Miasto</th>
		  </tr>
		  <tr>
		    <td class="tg_1" rowspan="5">Atlantycka</td>
		    <td class="tg_1">Boston Celtics</td>
		    <td class="tg_1">Boston, Massachusetts</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Brooklyn Nets</td>
		    <td class="tg_1">Brooklyn, Nowy Jork, Nowy Jork</td>
		  </tr>
		  <tr>
		    <td class="tg_1">New York Knicks</td>
		    <td class="tg_1">Manhattan, Nowy Jork, Nowy Jork</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Philadelphia 76ers</td>
		    <td class="tg_1">Filadelfia, Pensylwania</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Toronto Raptors</td>
		    <td class="tg_1">Toronto, Ontario</td>
		  </tr>
		  <tr>
		    <td class="tg_1" rowspan="5">Centralna</td>
		    <td class="tg_1">Chicago Bulls</td>
		    <td class="tg_1">Chicago, Illinois</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Cleveland Cavaliers</td>
		    <td class="tg_1">Cleveland, Ohio</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Detroit Pistons</td>
		    <td class="tg_1">Auburn Hills, Michigan</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Indiana Pacers</td>
		    <td class="tg_1">Indianapolis, Indiana</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Milwaukee Bucks</td>
		    <td class="tg_1">Milwaukee, Wisconsin</td>
		  </tr>
		  <tr>
		    <td class="tg_1" rowspan="5">Południowo-wschodnia</td>
		    <td class="tg_1">Atlanta Hawks</td>
		    <td class="tg_1">Atlanta, Georgia</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Charlotte Hornets</td>
		    <td class="tg_1">Charlotte, Karolina Północna</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Miami Heat</td>
		    <td class="tg_1">Miami, Floryda</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Orlando Magic</td>
		    <td class="tg_1">Orlando, Floryda</td>
		  </tr>
		  <tr>
		    <td class="tg_1">Washington Wizards</td>
		    <td class="tg_1">Waszyngton, Dystrykt Kolumbii</td>
		  </tr>
		</table>
	</article>
	<article class="konferencja">
	<a href="#wschod" id="wschodlink">Wschodnia</a>
	<h1 id="zachod">Konferencja Zachodnia</h1>
		<table class="tg_2">
		  <tr>
		    <th class="tg_2">Dywizja</th>
		    <th class="tg_2">Drużyna</th>
		    <th class="tg_2">Miasto</th>
		  </tr>
		  <tr>
		    <td class="tg_2" rowspan="5">Południowo-zachodnia</td>
		    <td class="tg_2">Dallas Mavericks</td>
		    <td class="tg_2">Dallas, Teksas</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Houston Rockets</td>
		    <td class="tg_2">Houston, Teksas</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Memphis Grizzlies</td>
		    <td class="tg_2">Memphis, Tennessee</td>
		  </tr>
		  <tr>
		    <td class="tg_2">New Orleans Pelicans</td>
		    <td class="tg_2">Nowy Orlean, Luizjana</td>
		  </tr>
		  <tr>
		    <td class="tg_2">San Antonio Spurs</td>
		    <td class="tg_2">San Antonio, Teksas</td>
		  </tr>
		  <tr>
		    <td class="tg_2" rowspan="5">Północno-zachodnia</td>
		    <td class="tg_2">Denver Nuggets</td>
		    <td class="tg_2">Denver, Kolorado</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Minnesota Timberwolves</td>
		    <td class="tg_2">Minneapolis, Minnesota</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Portland Trail Blazers</td>
		    <td class="tg_2">Portland, Oregon</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Oklahoma City Thunder</td>
		    <td class="tg_2">Oklahoma City, Oklahoma</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Utah Jazz</td>
		    <td class="tg_2">Salt Lake City, Utah</td>
		  </tr>
		  <tr>
		    <td class="tg_2" rowspan="5">Pacyfiku</td>
		    <td class="tg_2">Golden State Warriors</td>
		    <td class="tg_2">Oakland, Kalifornia</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Los Angeles Clippers</td>
		    <td class="tg_2">Los Angeles, Kalifornia</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Los Angeles Lakers</td>
		    <td class="tg_2">Los Angeles, Kalifornia</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Phoenix Suns</td>
		    <td class="tg_2">Phoenix, Arizona</td>
		  </tr>
		  <tr>
		    <td class="tg_2">Sacramento Kings</td>
		    <td class="tg_2">Sacramento, Kalifornia</td>
		  </tr>
		</table>
	</article>
	</section>

<?php include "footer.php"; ?>

	
</body>

</html>
