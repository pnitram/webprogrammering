<?php

include("./db-tilkobling.php");


  	$sqlSetning="SELECT * FROM $tabell;";
  	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() ); 
  	$antallRader=mysqli_num_rows($sqlResultat);

  	for ($r=1;$r<=$antallRader;$r++) {

  		$rad = mysqli_fetch_array($sqlResultat);
  		$klassekode=$rad["0"];
  		$klassenavn=$rad["1"];
  	
		print("<option value='$klassekode' name='klassekode'>$klassenavn</option> <br>");
  	}
?>