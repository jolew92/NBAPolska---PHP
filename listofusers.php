<?php
include "cookies.php";
require('connect_db.php');
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
    <?php include "stylesheetselect.php";
	$i=1;
    $row=array('','');
    if(getCookieValue('login') !== '') {
        echo '<h1>Lista użytkowników</h1>';
        $log = getCookieValue('login');
        $res = mysql_query("SELECT login FROM user");
		$row=mysql_fetch_row($res);
    echo' <article>';
       while($row!=false) {
			print("<p>".$i.". ".$row[0]."</p>");
			$row=mysql_fetch_row($res);
			$i++;
	   }
    echo'</article>';
	}
    ?>
</section>

</body>

</html>
