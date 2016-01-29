<?php

include("./db-tilkobling.php");

$sqlSetning="SELECT * FROM fag ORDER BY fagkode;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() ); 

$antallRader=mysqli_num_rows($sqlResultat);

for ($r=1;$r<=$antallRader;$r++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$fagkode=$rad["fagkode"];
	$fagnavn=$rad["fagnavn"];

	print("<option value='$fagkode'>$fagkode $fagnavn</option>");
}

?>