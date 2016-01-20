<?php

$host="localhost";
$user="oppgave11user";
$password="password"; //mysqlpassord
$database="oppgave11db"; 

$db=mysqli_connect($host,$user,$password,$database) or die("Ikke kontakt med DB-server: " .mysqli_connect_error());

?>