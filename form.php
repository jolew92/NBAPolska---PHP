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
    <!--<script type="text/javascript" src="js/prompt.js"></script>-->
    <script type="text/javascript" src="js/form.js"></script>
    <title>NBA Polska</title>
</head>
<?php if(getCookieValue('login') !== '') {
echo'
<body>
';
include "menu.php"; 
echo'<section>';
    include "stylesheetselect.php";
	echo'
    <h1>Formularz</h1>
    <article>
        <p id = "helpText"></p>
        <form id="formjs" name="myform" method="post" action="formsubmit.php" autocomplete="on">
            <label for="imie">Twoje imię: </label><input type="text" size="27" id="imie" name="imie"/><br><br>
            <label for="email">Twój email: </label><input type="email" size="27" id="email" name="email"/><br><br>
            <label for="www">Twoja strona www:</label><input type="url" id="www" name="www"><br><br>
            <label for="team">Wybierz swoją drużynę:</label><br>
            <select id="team" name="team">
                <option value="Boston Celtics">Boston Celtics</option>
                <option value="Brooklyn Nets">Brooklyn Nets</option>
                <option value="New York Knicks">New York Knicks</option>
                <option value="Philadelphia 76ers">Philadelphia 76ers</option>
                <option value="Toronto Raptors">Toronto Raptors</option>
                <option value="Chicago Bulls">Chicago Bulls</option>
                <option value="Cleveland Cavaliers">Cleveland Cavaliers</option>
                <option value="Detroit Pistons">Detroit Pistons</option>
                <option value="Indiana Pacers">Indiana Pacers</option>
                <option value="Milwaukee Bucks">Milwaukee Bucks</option>
                <option value="Atlanta Hawks">Atlanta Hawks</option>
                <option value="Charlotte Hornets">Charlotte Hornets</option>
                <option value="Miami Heat">Miami Heat</option>
                <option value="Orlando Magic">Orlando Magic</option>
                <option value="Washington Wizards">Washington Wizards</option>
                <option value="Dallas Mavericks">Dallas Mavericks</option>
                <option value="Houston Rockets">Houston Rockets</option>
                <option value="Memphis Grizzlies">Memphis Grizzlies</option>
                <option value="New Orleans Pelicans">New Orleans Pelicans</option>
                <option value="San Antonio Spurs">San Antonio Spurs</option>
                <option value="Denver Nuggets">Denver Nuggets</option>
                <option value="Minnesota Timberwolves">Minnesota Timberwolves</option>
                <option value="Portland Trail Blazers">Portland Trail Blazers</option>
                <option value="Oklahoma City Thunder">Oklahoma City Thunder</option>
                <option value="Utah Jazz">Utah Jazz</option>
                <option value="Golden State Warriors">Golden State Warriors</option>
                <option value="Los Angeles Clippers">Los Angeles Clippers</option>
                <option value="Los Angeles Lakers">Los Angeles Lakers</option>
                <option value="Phoenix Suns">Phoenix Suns</option>
                <option value="Sacramento Kings">Sacramento Kings</option>
            </select><br><br>
            <label for="like">Jak bardzo lubisz ten zespół: </label><br>
            <input type="range" id="like" name="like"><br><br>
            <label for="fromwhen">Od kiedy lubisz tą drużynę:</label><input type="month" id="fromwhen" name="forwhen"><br><br>
            <label>Masz więcej ulubionych drużyn?</label><br>
            <input value ="tak" name="Radio1" type="radio" checked="true"/><label id="Label1">Tak</label><br>
            <input value = "nie" name="Radio1" type="radio" /><label id="Label2">Nie</label><br><br>
            <textarea id="whyteam"name="txtArea" cols="40" rows="5" placeholder="Dlaczego jest to twoja ulubiona drużyna?"></textarea><br><br>
            <label>Wybierz swój ulubiony kolor: </label><input id="color" type="color" name="color"><br><br>
            <label>Wyszukaj coś?: </label><input id="search" type="search" name="search"><br><br>
            <input type="checkbox" id="wantinfo" name="wantinfo"/>
            <label for="wantinfo">Chcę otrzymywać informację o tej drużynie</label><br><br>
            <input id="SendBtn" type="submit" value="Wyślij" /><input id="ResetBtn" name="Reset1" type="reset" /><br>
        </form>
    </article>
</section>
';
include "footer.php";

echo'
</body>

</html>
';
}
?>