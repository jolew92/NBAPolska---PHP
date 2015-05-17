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
    <h1>O nas</h1>
    <article>
        <p>Masz <mark>pytanie</mark> odnoście strony? Masz <mark>pomysł</mark> jak ją ulepszyć?<br><br>
            Daj nam o tym znać pisząc na nasz adres*:
            <a href="mailto:joannalewicka@outlook.com?subject=NBA%20Polska" class="strony">joannalewicka@outlook.com</a></p>
        <aside style="color:darkgrey; font-size:xx-small">*Odpowiadamy na każde zapytanie w przeciągu 5 dni roboczych.</aside><br><br>

        <details>
            <summary style="color:white">Aktualny poziom prac na stroną:</summary>
            <p>Pracujemy teraz nad rozbudową drużyn, chcemy uwzględnić je wszystkie<br> a następnie rozbudowywać.</p>
            <p>Po wykonaniu tego etapu rozbudujemy każdą z drużyn a następnie będziemy<br> dodawać newsy.</p>
            <p>Ostatnim etapem będzie umożliwienie wam zakupu koszulek zawodników.</p>
            <meter value="20" min="0" max="100" style="text-align:center"></meter>
        </details>
    </article>
</section>

<?php include "footer.php"; ?>

</body>

</html>
