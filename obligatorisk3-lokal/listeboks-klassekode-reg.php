<?php

include("./db-tilkobling.php");


  	$sqlSetning="SELECT * FROM klasse;";
  	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() ); 
  	$antallRader=mysqli_num_rows($sqlResultat);


  	for ($r=1;$r<=$antallRader;$r++) {

  		$rad = mysqli_fetch_array($sqlResultat);
  		$klassekode=$rad["0"];
  		$klassenavn=$rad["1"];
  	
		print("<option value='$klassekode' name='velgKlassekode'>$klassekode - $klassenavn</option> <br>");
  	}

  	print("<script>$('select option:contains($klassekodePreSelected)').prop('selected',true);</script>");



?>