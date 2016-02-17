

<?php
//SJEKKBOKSER
<form....>

Avis 	<input type="checkbox" id="avis" name="avis[]" value="Vg">
		<input type="checkbox" id="avis" name="avis[]" value="Dn">



@$avis=$_POST["avis"];
$antall=count($avis);

if($antall==0) {
	print("Ingen avis valgt");
}

else {
	("Følgende avis er valgt");

	for ($v=0; $v<$antall;$v++) {
	print("$avis[$v]");
}

}

//MULTIPPEL SLETTING
//SJEKKBOKSER-POSTNR.PHP

include("./db-tilkobling.php");
$sqlSetning="SELECT * FROM poststed ORDER BY postnr;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra db");

$antallRader=mysqli_num_rows($sqlResultat);

for ($r;$r<=$antallRader;$r++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$postnr=$rad["postnr"];
	$poststed=$rad["poststed"];
	print("<input tyoe='checkbox' id='postnr' name='postnr[]' value='$postnr');
}



?>