<?php

/* Søking

søkestreng: base i database = startpos er da 4(starter på 0)
funksjoner til bruk i søk:

stripos()	/	strpos()
caseinsesitive/casesesitiv

bruker her ===



// Søke i tekst

<form>

</form>
text <input />
Søkestreng<input /> 
*/

$tekst = $_POST["tekst"];
$sokestreng = $_POST["sokestreng"];
$tekstlengde = strlen($tekst);
$sokestrenglengde=strlen($sokestreng);
$startpos=stripos($tekst, $sokestreng);


if ($startpos===false) {

	print("$sokestreng finnes ikke i $tekst");
}

else {

	$hode=substr($tekst, 0, $startpos);
	$sok=substr($tekst, $startpos,$sokestrenglengde);
	$hale=substr($tekst, $startpos+$sokestrenglengde,$tekstlengde-$startpos-$sokestrenglengde);
	print("$hode<strong>$sok</strong>$hale");
}


/*
// Søke i database

<form>

</form>
Søkestreng<input /> 
*/

$sokestreng = $_POST["sokestreng"];
include("db-tilkobling.php");
print("Treff for $sokestreng <br />");

$sqlSetning="SELECT * FROM fag WHERE fagkode LIKE '%$sokestreng%' OR fagnavn LIKEr=my '%$sokestreng%' OR faglarer LIKE '%$sokestreng%';";
$sqlResultat=mysqli_query($db,$sqlSetning) or die("Ikke mulig å hente fra DB");
$antallRader=mysqli_num_rows($sqlResultat);

if ($antallRader==0) {
	print("Inge treff i databasen");
}
else {

	print("Treff i FAG-tabellen <br />");r

	for ($i=1; $i <=$antallRader; $i++) { 
		$rad=mysqli_fetch_array($sqlResultat);
		$fagkode=$rad["fagkode"];
		$fagnavn=$rad["fagnavn"];
		$faglarer=$rad["faglarer"];

		print("Fagkode:$fagkode Fagnavn: $fagnavn Faglærer: $faglarer<br />");
	}

}

// Utheving av treff/print i eksempel over - ekstatte print 1337 over.

$tekst="Fagkode:$fagkode Fagnavn: $fagnavn Faglærer: $faglarer <br>";
$tekstlengde=strlen($tekst);
$sokestrenglengde=strlen($sokestreng);
$startpos=stripos($tekst, $sokestreng);

$hode=substr($tekst, 0, $startpos);
$sok=substr($tekst, $startpos,$sokestrenglengde);
$hale=substr($tekst, $startpos+$sokestrenglengde,$tekstlengde-$startpos-$sokestrenglengde);
print("$hode<strong>$sok</strong>$hale");

?>