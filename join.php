<?php
include "cookies.php";
require('connect_db.php');
$error=false;
if(isset($_POST['password'])){
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $birthday = $_POST['birthday'];
    if(getCookieValue('login') !== '') {
        $query = "UPDATE user SET password='" . $password . "',email='" . $email . "',first_name='" . $firstname . "',last_name='" . $lastname . "',birthday='" . $birthday . "' WHERE login='" . getCookieValue('login') . "'";
        $q="Edycja przebiegła pomyślnie!";
    } else {
        $username = $_POST['username'];
        $query = "INSERT INTO user (login, password, email, first_name, last_name, birthday) VALUES ('" . $username . "', '" . $password . "', '" . $email . "', '" . $firstname . "', '" . $lastname . "', '" . $birthday . "')";
        $q="Rejestracja przebiegła pomyślnie!";
    }

    $result = mysql_query($query);
    if($result){
        $msg = $q;
    } else{
	$error=true;
	}
}
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

    $row=array('','','','','','');
    if(getCookieValue('login') !== '') {
        echo '<h1>Edycja danych</h1>';
        $log = getCookieValue('login');
        $res = mysql_query("SELECT login, password, email, first_name, last_name, birthday FROM user WHERE login='".$log."'");
        $row=mysql_fetch_row($res);
    }
    else{
        echo '<h1>Rejestracja</h1>';
    }

    echo' <article>
        <form method="post" action="" autocomplete="on">';
    if(getCookieValue('login') !== '')
        echo ' <label id="Label1">Login:</label><input id ="username" name="username" type="text" disabled value="'.$row[0].'" required ><br><br>';
    else
        echo ' <label id="Label1">Login:</label><input id ="username" name="username" type="text" value="'.$row[0].'" required ><br><br>';
    echo '<label id="Label2">Hasło:</label><input id="password" name="password" type="password" autofocus value ="'.$row[1].'" required/><br><br>
            <label id="Label3">E-mail:</label><input id="email" name ="email" type="email" value="'.$row[2].'"required/><br><br>
            <label id="Label1">Imię:</label><input id="firstname" name="first_name" type="text" value ="'.$row[3].'"/><br><br>
            <label id="Label2">Nazwisko:</label><input id="surename" name="last_name" type="text" value="'.$row[4].'" /><br><br>
            <label id="Label3">Data urodzin:</label>
            <input id="birthday" name="birthday" type="date" value="'.$row[5].'"/><br><br>';

    if(getCookieValue('login') !== '')
        echo'<input name="Submit1" type="submit" value="Edytuj" />';
    else
        echo'<input name="Submit1" type="submit" value="Rejestruj" /><input name="Reset1" type="reset" value="Reset" />';

    echo' </form>
    </article>';
    ?>
</section>

<?php include "footer.php";?>


</body>
<?php
if(isset($msg)){
    print("<script type=\"text/javascript\">");
    print("alert(\"".$msg."\")");
    print("</script>");
} else if($error==true) {
	print("<script type=\"text/javascript\">");
    print("alert(\"Nie udało się utworzyć użytkownika\")");
    print("</script>");
}
?>
</html>
