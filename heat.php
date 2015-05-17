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
	<script type="text/javascript" src="js/mousepointer.js"></script>
	<script type="text/javascript" src="js/anchors.js"></script>
	<title>NBA Polska</title>
</head>

<body>

<?php include "menu.php"; ?>

	<section>
        <?php include "stylesheetselect.php"; ?>
		<h1>Miami Heat</h1>
		<article><a href="image/heatroster.jpg" download="heatroster.jpg">
		<img class="images" src="image/heatroster.jpg" alt="Heat" height=400 width=600></a></article>
		<article><p id="coords"></p>
				<p id="anchors"></p>
		</article>
		<article id="text">
		<div class="columns">
		<p>Miami Heat – amerykański klub koszykarski z siedzibą w Miami grający w lidze NBA. Zespół występuje w Konferencji Wschodniej w dywizji południowo-wschodniej. Swoje mecze rozgrywa w hali American Airlines Arena zlokalizowanej w centrum Miami. Właścicielem klubu jest Micky Arison, prezesem Pat Riley, a trenerem Erik Spoelstra.</p>

		<p>Klub został założony w 1988 roku. Jest jednym z dwóch zespołów, obok Orlando Magic, który reprezentuje stan Floryda w NBA. W ciągu 25 sezonów Heat siedemnastokrotnie występowali w fazie playoff, będąc dziesięciokrotnie mistrzami dywizji, czterokrotnie mistrzami Konferencji Wschodniej i trzykrotnie mistrzami ligi, pokonując Dallas Mavericks 4–2 w sezonie 2005-06, Oklahoma City Thunder 4–1 w sezonie 2011-12 i San Antonio Spurs 4-3 w sezonie 2012-13[1]. Według magazynu Forbes wartość zespołu w 2010 roku wynosiła 425 milionów dolarów.</p>
		
		<p>W ostatnich sezonach w Miami zaszły duże zmiany, odeszło kilku podstawowych graczy – przede wszystkim jeden z jego najmocniejszych punktów – center Shaquille O'Neal (do Phoenix Suns) oraz Alonzo Mourning, Antoine Walker, Gary Payton, James Posey, Jason Williams i Jason Kapono. Klub w zamian pozyskał Shawna Mariona oraz Marcusa Banksa, przybył także center Jamaal Magloire.</p>
		
		<p>Sezon 2007/2008 był dla klubu najsłabszym od prawie dwudziestu lat. Heat zakończyli go z bilansem 15-67 i zostali najgorszą drużyną w lidze. Po tym sezonie z funkcji trenera zrezygnował Pat Riley, a jego miejsce zajął Erik Spoelstra. Pat Riley pozostał jednak w klubie i pełni funkcję generalnego menadżera. W związku ze słabym wynikiem w sezonie 2007/2008, klubowi przypadł wysoki – drugi – numer w drafcie NBA, z którym wybrany został skrzydłowy Michael Beasley. W lutym 2009, klub postanowił wymienić pozyskanych rok wcześniej z Phoenix Shawna Mariona i Marcusa Banksa na Jermaine’a O’Neala i Jamario Moona. W sezonie 2008/2009 klub jeszcze przed zakończeniem rozgrywek zdołał zapewnić sobie awans do play-off. W skróconym przez lockuout sezonie zasadniczym 2011/2012 Miami Heat z wynikiem 46-20 zajęło drugie miejsce w konferencji wschodniej i awansowało do fazy play-off. W pierwszej rundzie Miami pokonało New York Knicks 4-1. W półfinałach konferencji pokonali zespół Indiana Pacers 4-2. W finale konferencji zmierzyli się z ekipą Boston Celtics, którą pokonali 4-3, awansując tym samym do finału NBA. Tam czekała na nich ekipa Oklahoma City Thunder, Heat byli jednak nie do zatrzymania, wygrali serię 4-1, a LeBron James został wybrany MVP finałów.</p>
		
		<p>Przed sezonem 2012/2013 kontrakt z klubem podpisał Ray Allen. W tym sezonie Heat wygrali 27 meczów z rzędu, co stanowi drugą co do długości serię zwycięstw w historii NBA (dłuższa była tylko seria 33 zwycięstw Los Angeles Lakers). Seria została rozpoczęta 3 lutego zwycięstwem nad Toronto Raptors, a zakończona 27 marca porażką z Chicago Bulls. Sezon zasadniczy zakończyli z bilansem 66-16, najlepszym w lidze, notując najwięcej zwycięstw w sezonie i najwięcej wygranych we własnej hali (37) w historii klubu. W fazie play-off Miami pokonało 4-0 Milwaukee Bucks, a następnie 4-1 Chicago Bulls. W finale konferencji wygrali z Indiana Pacers 4-3. W finale NBA wygrali 4-3 z San Antonio Spurs. MVP finałów został ponownie LeBron James.</p>
		</div>		
		</article>
	
	</section>


<?php include "footer.php"; ?>

</body>

</html>
