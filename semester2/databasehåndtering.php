


<?php


////

//db-tilkobling.php

$host="localhost";
$user:"882555";
$password="";
$database="882555"; //mysqlpassord

$db=mysqli_connect($host,$user,$password,$database) or die("ikke kontakt med DB-server");

//////

?>

<?php
//vis alle poststed (egen phpfil)

include("db-tilkobling.php");
$sqlSetning="SELECT * FROM poststed;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysql_error() );
$antallRader=mysqli_num_rows("sqlResultat");


// html tabell --> print ("<table>; print("<th>postnr)
for ($r=1;$v<=$antallRader;$v++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$postnr=$rad["postnr"];
	$poststed=$rad["poststed"];
	print("$postnr $poststed </br>");
}


?>