<?php
    include 'cookies.php';
    session_unset();
    session_destroy();
    $_SESSION['logged'] = FALSE;
   // unset($_SESSION['logged']);
    setCookieValue('login', '');
    header("Location: index.php");
    exit;
?>