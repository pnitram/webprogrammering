<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Øvingsoppgave 8-1</title>
	<script src="hendelser.js"></script>
	<script src="validering.js"></script>

	<link rel="stylesheet" type="text/css" href="8-1.css">
</head>
<body>
<h2>Øvingsoppgave 8-1</h2>
<p>Validering med Java-script og php.</p>
<h3>Skjema</h3>

    <form action="" method="post" style="display:block" onsubmit="return validerRegistrerFag()">
        
            <label for="fagkode">Fagkode</label><input type="text" name="fagkode" id="fagkode" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOver(this)" onmouseout="musUt(this)" onchange="tilStore(this)" />
            <label for="fagnavn">Fagnavn</label><input type="text" name="fagnavn" id="fagnavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOver(this)" onmouseout="musUt(this)"/>
            <label for="faglarer">Faglærer</label><input type="text" name="faglarer" id="faglarer" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOver(this)" onmouseout="musUt(this)"/>
        	<input type="submit" value="Fortsett" name="fortsett" id="fortsett" />
        	<input type="reset" value="Nullstill" name="reset" id="reset" />
       

    </form>
<div id="melding"></div>

<?php
$fortsett=$_POST["fortsett"];

if ($fortsett) {
include ("valider.php");

$fagkode=$_POST["fagkode"];
$fagnavn=$_POST["fagnavn"];
$faglarer=$_POST["faglarer"];
$fagkode=strtoupper($fagkode);

$lovligFagkode=validerFagkode($fagkode);

if (!$lovligFagkode) {
	print("Fagkode er ikke korrekt utfyllt<br>");
}
if (!$fagkode && !$fagnavn && !$faglarer){
	print("Alle felt må fylles ut<br>");
}
if ($lovligFagkode && $fagnavn && $faglarer) {
      /*$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\gb/studentdata.txt"; */
      $filnavn=("./temp/fag.txt");
      $filoperasjon="a";

      $linje=$fagkode . ";" . $fagnavn . ";" . $faglarer . "\n";    
      $fil = fopen($filnavn,$filoperasjon);
      fwrite ($fil,$linje);
      fclose ($fil);
      print ("Følgende data er nå registrert på fil: $fagkode $fagnavn $faglarer");
  }
}

	
?>

</body>
</html>