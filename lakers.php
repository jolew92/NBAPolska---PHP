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
    <script type="text/javascript" src="js/hideImages.js"></script>
	<title>NBA Polska</title>
</head>

<body>

<?php include "menu.php"; ?>

	<section>
        <?php include "stylesheetselect.php"; ?>
		<h1>Los Angeles Lakers</h1>

        <input type="button" id="hideBtn" value="Ukryj obrazki" style="float:right; position:relative"/>

		<article id="art1"><a href="image/lakersroster.jpg" download="lakersroster.jpg">
		<img class="images" src="image/lakersroster.jpg" alt="Lakers" height=400 width=600></a></article>
		<article id="art2" class="imgtr"><img class="imgtrans1" src="image/l1.jpg" alt="Lakers1" height=300 width=400></a>
		<img class="imgtrans2" src="image/l2.jpg" alt="Lakers2" height=300 width=400></a></article>
	</section>

<?php include "footer.php"; ?>
	
</body>

</html>
