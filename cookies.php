<?php
if(isset($_POST['stylechoose'])){
    setCookieValue('sitestyle', $_POST['stylechoose']);
    header('Location: '.$_SERVER['REQUEST_URI']);
}
$sitestyle = isset($_COOKIE['sitestyle'])?getCookieValue('sitestyle'):'style.css';

    function setCookieValue($key, $val)
    {
        define( "FIVE_DAYS", 60 * 60 * 24 * 5 ); // define constant
        $time = time() + FIVE_DAYS;
        setcookie($key, $val, $time);
    }

    function getCookieValue($key)
    {
        if(isset($_COOKIE[$key]))
        {
            return $_COOKIE[$key];
        }
        else {
            return '';
        }
    }


?>