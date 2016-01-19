<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Øvingsoppgave 6-1</title>
	<style type="text/css">
	label {
		float: left;
		width: 100px;
		text-align: right;
		font-weight: bold;
		margin-right: 10px;
		
	}

	input#fortsett, input#reset {
		margin-top: 0.5em;
		width: 100px;
		margin-left: 110px;
	}
	input {
		display: block;
		margin: 5px;
		
	}

	h3 {
		margin-top: 70px;
		margin-left: 90px;
	}

	</style>
</head>
<body>
<h2>Øvingsoppgave 6-1</h2>
<h3>Skjema</h3>

    <form action="" method="post" style="display:block">
        
            <label for="navn">Navn</label><input type="text" name="navn" id="navn" />
            <label for="adresse">Adresse</label><input type="text" name="adresse" id="adresse" />
            <label for="postnr">Postnr</label><input type="text" name="postnr" id="postnr" />
            <label for="poststed">Poststed</label><input type="text" name="poststed" id="poststed" />
            <label for="klassekode">Klassekode</label><input type="text" name="klassekode" id="klassekode" />
        	<input type="submit" value="Fortsett" name="fortsett" id="fortsett" />
        	<input type="reset" value="Nullstill" name="reset" id="reset" />
       

    </form>

<?php
$fortsett=$_POST["fortsett"];

if ($fortsett) {
include ("valider.php");

$navn=$_POST["navn"];
$adresse=$_POST["adresse"];
$postnr=$_POST["postnr"];
$poststed=$_POST["poststed"];
$klassekode=$_POST["klassekode"];
$klassekode=strtoupper($klassekode);


$lovligPostnr=validerPostnr($postnr);
$lovligKlassekode=validerKlassekode($klassekode);

if (!$lovligPostnr) {
	print("Postnummer er ikke korrekt utfyllt<br>");
}
if (!$lovligKlassekode) {
	print("Klassekode er ikke korrekt utfyllt<br>");
}
if (!$navn && !$adresse && !$poststed){
	print("Alle felt må fylles ut<br>");
}
if ($navn && $adresse && $lovligPostnr && $poststed && $lovligKlassekode) {
      /*$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\gb/studentdata.txt"; */
      $filnavn=("./temp/studentdata.txt");
      $filoperasjon="a";

      $linje=$navn . ";" . $adresse . ";" . $postnr . ";" . $poststed . $klassekode . "\n";    
      $fil = fopen($filnavn,$filoperasjon);
      fwrite ($fil,$linje);
      fclose ($fil);
      print ("Følgende data er nå registrert på fil: $navn $adresse $postnr $poststed $klassekode");
  }
}

	
?>

</body>
</html>