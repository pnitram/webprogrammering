
<!-- Forelesning 071015 - Funksjoner -->
<?php

// Innebygde funksjoner feks:

//print
print("<h3>Forelesning 071015 - funksjoner</h3><br>");
/*
//eller explode
$tekst ="Martin Pedersen";
$del=explode(" ", $tekst);
$fornavn=$del[0];
$etternavn=$del[1];

print("Hele teksen er $tekst <br>");
echo ("$fornavn $etternavn");


//--Egendefinert funksjon --

function validerPostnr ( $postnr ) {
	$lovligPostnr=true;
	if (!postnr) {
		$lovligPostnr = false;
	}
	elseif (strlen($postnr)!=4) {
		$lovligPostnr=false;
	}
	elseif (!is_numeric($postnr)) {
		$lovligPostnr=false;
	}
	return $lovligPostnr;
}

//funksjonskall
include("validerPostnr.php");
$postnr="";
$lovligPostnr=validerPostnr($postnr);

if ($lovligPostnr) {
	print("Postnr er korrekt");
}
else {
	print("Postnr er ikke korrekt");
}
*/

//Inkludering av egendefinert funksjon

include ("valider.php");
$navn=$_POST["navn"];
$adresse=$_POST["adresse"];
$postnr=$_POST["postnr"];
$poststed=$_POST["poststed"];
$klassekode=$_POST["klassekode"];

$lovligPostnr=validerPostnr($postnr);
$lovligKlassekode=validerKlassekode($klassekode);
if (!$lovligPostnr) {
	print("Postnrer ikke korrekt");
}
if (!$lovligKlassekode) {
	print("Klassekode er ikke korrekt");
}
if (!$navn) && (!$adresse) && !$poststed){
	print("Alle felt må fylles ut");
}
if ($navn) && ($adresse) && (!postnr) && $poststed) && $klassekode {
	print("skriv data til fil");
	}






?>