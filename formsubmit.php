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
    <br>
    <article>
        <p>Witaj <?php print($_POST["imie"]); ?></p>
        <?php
        $email=$_POST["email"];
        $www=$_POST["www"];
        $team=$_POST["team"];
        $like=$_POST["like"];
        $forwhen=$_POST["forwhen"];
        $radio=$_POST["Radio1"];
        $text=$_POST["txtArea"];
        $color=$_POST["color"];
        $search=$_POST["search"];
        $wantinfo=isset($_POST["wantinfo"])?'tak':'nie';

        print('<p>Twój email: '.$email.'</p>
		<p>Twój strona www: '.$www.'</p>
		<p>Twoja drużyna: '.$team.'</p>
		<p>Jak bardzo lubisz tą drużynę: '.$like.'</p>
		<p>Lubisz ją od: '.$forwhen.'</p>
		<p>Czy masz więcej ulubionych: '.$radio.'</p>
		<p>Dlaczego ją lubisz: '.$text.'</p>
		<p>Twój ulubiony kolor: '.$color.'</p>
		<p>Wyszukałeś: '.$search.'</p>
		<p>Chcesz otrzymywać info o tej drużynie: '.$wantinfo.'</p>');
        die();
        ?>
    </article>
</section>
<?php include "footer.php"; ?>
</body>