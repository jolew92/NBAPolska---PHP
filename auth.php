<?php
session_start();
include 'cookies.php';
require('connect_db.php');

error_reporting(E_ALL | E_WARNING | E_NOTICE); // Report runtime errors
ini_set('display_errors', TRUE); //php.ini

function unauthorized()
{
    header("Location: index.php");
    die();
}

function authorized()
{
   header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$login = $_POST['login'];
	$password = $_POST['password'];

	$query = "SELECT * FROM `user` WHERE login='$login' and password='$password'";
	$result = mysql_query($query) or die(mysql_error());
	$count = mysql_num_rows($result);

	if ($count == 1){
		$_SESSION['login'] = $login;
		$_SESSION['logged'] = TRUE;
		setCookieValue('login', $login);
		authorized();
	}else{
		print("<script type=\"text/javascript\">");
		print("alert(\"Niepoprawne dane.\");");
		print("window.location = './index.php';");
		print("</script>");
	}
}
?>
