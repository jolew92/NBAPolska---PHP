<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo "Connected successfully<br>";
$sql = 'DROP Database nba_db';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not drop database: ' . mysql_error());
}
echo "Database nba_db droped successfully<br>";

mysql_close($conn);
?>