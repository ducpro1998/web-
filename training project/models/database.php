<?php
try{
$pdo_conn = new PDO("mysql:host=localhost;dbname=watch","root","");
}
catch(Exception $e)
{ 
	echo"Database connection error";
	die();
}
$pdo_conn->query("SET NAMES UTF-8");
?>