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
$sql = 'CREATE Database nba_db';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create database: ' . mysql_error());
}
echo "Database nba_db created successfully<br>";

$sql = 	'CREATE TABLE user( '.
		'id INT(11) NOT NULL AUTO_INCREMENT, '.
		'login VARCHAR(225) NOT NULL, '.
		'password VARCHAR(255) NOT NULL, '.
		'email VARCHAR(255) NOT NULL, '.
		'first_name VARCHAR(255), '.
		'last_name VARCHAR(255), '.
		'birthday DATE, '.
		'primary key (id),'.
		'UNIQUE KEY login (login))';

mysql_select_db('nba_db');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table users created successfully<br>";

$sql = 	"INSERT INTO user (login, password, email, first_name, last_name, birthday) VALUES ('test','test','email@email.com','Jan','Kowalski','1990-01-01'),".
		"('test2','test2','test2@email.com','Jan','','1990-01-01'),".
		"('test3','test3','test3@email.com','','','1990-01-01'),".
		"('test4','test4','test4@email.com','Jan','Kowalski',''),".
		"('admin','admin','admin@email.com','Joanna','Lewicka','1992-03-22')"
		;

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not add users: ' . mysql_error());
}
echo "Users added successfully<br>";

mysql_close($conn);
?>