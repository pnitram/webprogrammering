


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


// html tabell --> print ("<table>; print("<th>postnr osv)
for ($r=1;$v<=$antallRader;$v++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$postnr=$rad["postnr"];
	$poststed=$rad["poststed"];
	print("$postnr $poststed </br>");
}
?>

<?php
/*
<form .....>
postnr <input .... osv>
*/

$_POST["postnr"];
$_POST["poststed"];
if (!$postnr || !$poststed) {
	print ("Begge må fylles ut");
}

else {

	include("db_tilkobling.php");
	$sqlSetning="SELECT * FROM poststed WHERE postnr='$postnr';";

	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysql_error() );

	$antallRader=mysqli_num_rows("sqlResultat");

	if ($antallRader!"=0") {
		print("Poststed er registrert fra før");
	}

	else
{
/*

SJEKKE OM POSTNR FINNES  I POSTSTED BASEN

KJØRE EN  IF ($antallRader==0) {
	
	print("Postnr finnes ikke i poststedtabellen");
}


*/

	$sqlSetning="INSERT INTO poststed VALUES('$postnr','$poststed');";
	mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysql_error() );
	print("Poststed registrert");	

}


}




?>