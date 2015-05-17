<?php
session_start();
//  include 'cookies.php';

error_reporting(E_ALL | E_WARNING | E_NOTICE); // Report runtime errors
ini_set('display_errors', TRUE); //php.ini

setCookieValue('session_id', session_id());

if(!isset($_SESSION['logged']))
{
    $_SESSION['logged'] = FALSE;
}
/* else if($_SESSION['logged'] && getCookieValue('login') !== '') {
   //  header("Location: auth.php");
 }*/
?>

<nav id="menu">
    <ul>
    <li><a href="http://www.nba.com"><img class="icon" src="image/basketball.png" alt="ikonka" id="icon"></a></li>
    <li><a href="index.php">Strona Główna</a></li>
    <li><a href="teams.php">Drużyny</a>
        <ul>
            <li><a href="clippers.php">Los Angeles Clippers</a></li>
            <li><a href="heat.php">Miami Heat</a></li>
            <li><a href="cavaliers.php">Cleveland Cavaliers</a></li>
            <li><a href="lakers.php">Los Angeles Lakers</a></li>
            <li><a href="thunder.php">Oklahoma City Thunder</a></li>
        </ul>
    </li>
    <li><a href="#" onclick="randomteam();">Losuj drużynę</a>
        <ul>
            <li><a href="generate.php">Generator drużyn</a></li>
        </ul>
    </li>
    <li><a href="stats.php">Statystyki</a>
        <ul>
            <li><a href="playoffs2014.php">Playoffs 2014</a></li>
        </ul>
    </li>
    <li><a href="#">Kontakt</a>
        <ul>
            <li><a href="about.php">O nas</a></li>

            <li><a href="#">Formularz</a>
                <ul>
                    <?php if(isset($_SESSION['logged']) && getCookieValue('login') !== '')
                        echo'
                        <li><a href="form.php">Formularz 1</a></li>';
                    ?>
                    <li><a href="contact.php">Formularz 2</a></li>
                </ul></li>
        </ul>
    </li>
    <li><a href="#">Inne</a>
        <ul>
            <li><a href="toppicks.php">Twoje TOP drużyny</a></li>
            <li><a href="stylecreator.php">Kreator stylu</a></li>
        </ul>
    </li>
<?php if(isset($_SESSION['logged']) && getCookieValue('login') !== '')
    echo' <li><a href="join.php">Edycja danych</a></li>';
?>
        <li><?php if(isset($_SESSION['logged']) && getCookieValue('login') !== '') {
                $temp = getCookieValue('login');
                echo "<a href='logout.php'>Wyloguj $temp</a>";
            }
            else {
                include 'login.php';
            }
            ?>
        </li>
    </ul>
</nav>

<nav id="menu2">
    <ul class="no-js">
        <li>
            <a class="clicker"><img src="image/basketball.png" alt="ikonka" id="icon2"></a>
            <ul>
                <li><a href="index.php">Strona Główna</a></li>
                <li><a href="teams.php">Drużyny</a>
                    <ul>
                        <li><a href="clippers.php">Los Angeles Clippers</a></li>
                        <li><a href="heat.php">Miami Heat</a></li>
                        <li><a href="cavaliers.php">Cleveland Cavaliers</a></li>
                        <li><a href="lakers.php">Los Angeles Lakers</a></li>
                        <li><a href="thunder.php">Oklahoma City Thunder</a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="randomteam();">Losuj drużynę</a>
                    <ul>
                        <li><a href="generate.php">Generator drużyn</a></li>
                    </ul>
                </li>
                <li><a href="stats.php">Statystyki</a>
                    <ul>
                        <li><a href="playoffs2014.php">Playoffs 2014</a></li>
                    </ul>
                </li>
                <li><a href="#">Kontakt</a>
                    <ul>
                        <li><a href="about.php">O nas</a></li>
                        <li><a href="#">Formularz</a>
                            <ul>
                                <li><a href="form.php">Formularz 1</a></li>
                                <li><a href="contact.php">Formularz 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Inne</a>
                    <ul>
                        <li><a href="toppicks.php">Twoje TOP drużyny</a></li>
                        <li><a href="stylecreator.php">Kreator stylu</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>