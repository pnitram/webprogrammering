<?php

include("./db-tilkobling.php");

$sqlSetning="SHOW TABLES;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() ); 

$antallRader=mysqli_num_rows($sqlResultat);


for ($r = 1; $r <= $antallRader; $r++) {
    echo "Table: ", mysqli_tablename($sqlResultat, $r), "<br />";
}











/*
for ($r=1;$r<=$antallRader;$r++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$tabell=$rad["tabell"];

	print("<option value='$tabell'>$tabell</option>");
}
*/
?>