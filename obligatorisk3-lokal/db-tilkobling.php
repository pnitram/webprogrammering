<?php

/*
$host="localhost";
$user="882555";
$password="74780"; //mysqlpassord
$database="882555"; 
*/

$host="localhost";
$user="oblig3";
$password="oblig3"; //mysqlpassord
$database="oblig3"; 


$db=mysqli_connect($host,$user,$password,$database) or die("Ikke kontakt med DB-server: " .mysqli_connect_error());

?>