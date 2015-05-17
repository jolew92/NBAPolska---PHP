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
    <script type="text/javascript" src="js/indexlinklist.js"></script>
    <title>NBA Polska</title>
</head>

<body>

<?php include "menu.php"; ?>

<section>
    <?php include "stylesheetselect.php"; ?>
    <h1 id="title">Strona Główna</h1>
    <article>
        <?php
        $name=getCookieValue('login');
        echo"<h1 style='text-align:center'>Witaj $name!</h1>" ?>
        <p>Witaj na polskiej stronie poświęconej
            <a href="http://www.nba.com" class="strony" style="opacity:1"><em>NBA</em></a>. </p>
        <p>Obecnie strona jest w trakcie tworzenia,
            nie zawiera informacji o wszystkich drużynach. <br>Nie martw się, to się w krótce zmieni.</p>
        <p>Nie ma twojej ulubionej? Chcesz, żeby została uzupełniona wcześniej niż inne?</p>
        <p>Poinformuj nas o tym wypełniając
            krótki
            <em><a href="form.php" class="strony">formularz</a></em>.</p>
    </article>
    <div id="footer">
    </div>
</section>

<?php include "footer.php"; ?>
</body>
</html>
