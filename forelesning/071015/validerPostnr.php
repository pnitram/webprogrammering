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

?>