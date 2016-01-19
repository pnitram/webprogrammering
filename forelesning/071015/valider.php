<?php 
	
	function validerPostnr ( $postnr ) {
	$lovligPostnr=true;
	if (!$postnr) {
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
/*
	function validerKlassekode ( $klassekode ) {
		$lovligKlassekode=true;
		if (!$lovligKlassekode) {
			# code...
		}
	} 
*/
?>
<!--
if (!$klassekode=false) {
	$klassekode=false;
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
-->