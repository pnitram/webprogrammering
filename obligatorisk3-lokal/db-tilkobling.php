<?php

$host="localhost";
$user="882555";
$password="74780"; //mysqlpassord
$database="882555"; 

$db=mysqli_connect($host,$user,$password,$database) or die("Ikke kontakt med DB-server: " .mysqli_connect_error());

?>