<?php 
	
	function validerPostnr ( $postnr ) {
	$lovligPostnr=true;
	if (!$postnr) {
		$lovligPostnr =false;
	}

	elseif (strlen($postnr)!=4) {
		$lovligPostnr=false;
	}

	elseif (!is_numeric($postnr)) {
		$lovligPostnr=false;
	}

	return $lovligPostnr;
}

	function validerKlassekode ( $klassekode ) {
	$lovligKlassekode=true;

	if (!$klassekode) {
		$lovligKlassekode=false;
	}

	elseif (strlen($klassekode)!=3) {
		$lovligKlassekode=false;
	}

	
	else {
	$tegn1=substr($klassekode, 0, 1);
	$tegn2=substr($klassekode, 1, 1);
	$tegn3=substr($klassekode, 2, 1);

		if ($tegn1 <"A" || $tegn1 >"Z" || $tegn2 <"A" || $tegn2 >"Z" || $tegn3 <"1" || $tegn3 >"9") {
		$lovligKlassekode=false;
	}
}

	return $lovligKlassekode;
}

function validerFagkode ( $fagkode ) {
	$lovligFagkode=true;
	if (!$fagkode) {
		$lovligFagkode=false;
	}
		elseif (strlen($fagkode)!=7) {
		$lovligFagkode=false;
	}

	else {
	$tegn1=substr($fagkode, 0, 1);
	$tegn2=substr($fagkode, 1, 1);
	$tegn3=substr($fagkode, 2, 1);
	$tegn4=substr($fagkode, 3, 1);
	$tegn5=substr($fagkode, 4, 1);
	$tegn6=substr($fagkode, 5, 1);
	$tegn7=substr($fagkode, 6, 1);

		if ($tegn1 <"A" || $tegn1 >"Z" || $tegn2 <"A" || $tegn2 >"Z" || $tegn3 <"A" || $tegn3 >"Z" ||$tegn4 <"0" || $tegn4 >"9"
		|| $tegn5 <"0" || $tegn5 >"9" || $tegn6 <"0" || $tegn6 >"9" || $tegn7 <"0" || $tegn7 >"9") 
		$lovligFagkode=false;
	}
return $lovligFagkode;
}
?>