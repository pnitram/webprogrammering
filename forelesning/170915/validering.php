<?php
print("<h1 style='text-align:center' > Forelesning PHP 17.09.15 - VALIDERING</h1><br>");


//----UTEN VALIDERING I PHP----

$postnr=$_POST["postnr"];
$poststed=$_POST["poststed"];
print("Postnr: $postnr Poststed: $poststed");


//----HTML5 VALIDERING----

//postnr <input.........> required

//----MED VALIDERING I PHP----
$postnr=$_POST["postnr"];
$poststed=$_POST["poststed"];
if (!$postnr) {
	print("Postnummer er ikke fyllt ut")
}
if (!$poststed) {
	print("Postnummer er ikke fyllt ut")
}
//----Benytt validering både i php og html5!----


//----VALIDERING AV POSTNUMMER----
//----Krav "4 TEGN" og "KUN SIFFER"----

$postnr=$_POST["postnr"]
;$lovligPostnr=true;
if (!$postnr) {
	$lovligPostnr=false;
	print("Postnr er ikke fyllt ut");
}
elseif (strlen($postnr)!=4) {
	$lovligPostnr=false;
	print("Postnummer består ikke av 4 tegn");
}
elseif (is_numeric($postnr)) {
	$lovligPostnr=false;
	print("Postnummer består ikke bare av siffre");
}
if ($lovligPostnr) {  //Betyr $lovligPostnr=true
	print("Postnumer er korrekt fyllt ut");
}

//----VALIDERING AV KLASSEKODE----
//----Krav er "3 TEGN" og "2 STORE BOKSTAVER + 1 SIFFER(1-9)"----

$klassekode=$_POST["klassekode"];
$lovligKlassekode=true;

if (!$klassekode=false) {
	print("Klassekode er ikke fyllt ut");
}
elseif (strlen($klassekode)!=3)) {
	print("Klassekode består ikke av 3 tegn")
}

else {
	$tegn1=substr($klassekode, 0, 1);
	$tegn2=substr($klassekode, 1, 1);
	$tegn3=substr($klassekode, 2, 1);

	//Finne ut om kombinasjon er ulovlig---
	if ($tegn1 <"A" || $tegn1 >"Z" || $tegn2 <"A" || $tegn2 >"Z" || $tegn3 <"1" || $tegn3 >"9") {
		$lovligKlassekode=false;
		print("Klassekode inneholder minst ett ulovlig tegn")
	}
}

if ($lovligKlassekode) {
	print("Klasse kode er korrekt fyllt ut");
}

//----HVORDAN GJØRE OM FRA SMÅ TIL STORE BOKSTAVER----

$klassekode=strtoupper($klassekode);


?>