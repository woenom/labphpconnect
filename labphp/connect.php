<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_base = 'base';
$db_table = "content";
$mysqli= new mysqli($db_host,$db_user,$db_password,$db_base);
if ($mysqli->connect_error){
	die("Ошибка");
}
?>