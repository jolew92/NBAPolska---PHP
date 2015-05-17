<?php
include "cookies.php";
$sitestyle = isset($_COOKIE['sitestyle'])?$_COOKIE['sitestyle']:'style/style.css';
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
    <link rel="stylesheet" type="text/css" media="screen" title="User Defined Style" <?php print('href="'.$sitestyle.'"');?>/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<title>NBA Polska</title>
</head>

<body>

<?php include "menu.php"; ?>

	<section>
        <?php include "stylesheetselect.php"; ?>

		<h1>Playoffs 2014</h1>
		<article><a href="http://ballnroll.com/Uploads/Blogs/ExclusiveAccess/2014PlayoffsNewsCentre/Winners%20Bracket.JPG" download="playoffs2014tree.jpg">
		<img alt="Playoffs 2014 Tree" height=400 width=600 src="http://ballnroll.com/Uploads/Blogs/ExclusiveAccess/2014PlayoffsNewsCentre/Winners%20Bracket.JPG">
		</a></article>
	</section>

<?php include "footer.php"; ?>



	
</body>

</html>
