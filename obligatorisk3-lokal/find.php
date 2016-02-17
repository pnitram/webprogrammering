<!DOCTYPE html>
<html>
<head>
	<title>SØK ETTER DATA REGISTRERT I TABELL</title>

    <link rel="stylesheet" type="text/css" href="./style.css">
    <meta charset="utf-8">
</head>
<body>

<!-- INKLUDERER HOVEDMENY -->
<div class="leftside">
<?php include "./meny.php"; ?>
</div>
<!-- VIS DATA REGISTRERT I TABELL -->
<main>
<div class="rightside">
<div class="box">
<h2>Søk i tabellene</h2>
<div class="container">
<form method="post" action="" id="sokeSkjema" name="sokeSkjema">
Søk: <input type="text" id="find" name="find" required /> <br/>
<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
</form>
</div>
</div>



<!-- PHP KODE STARTER -->
<?php

@$fortsett=$_POST["fortsett"];


if ($fortsett) {

	$sokestreng = $_POST["find"];
	include("./db-tilkobling.php");
	print("<p style='text-align: center;padding-top:1em;'>Treff for: <strong>$sokestreng</strong></p>");

/* SØK I KLASSETABELL */

	$sqlSetning="SELECT * FROM klasse WHERE klassekode LIKE '%$sokestreng%' OR klassenavn LIKE '%$sokestreng%';";
	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
	$antallRader=mysqli_num_rows($sqlResultat);

	if ($antallRader==0) {
		print("<div class='box'>");
		print("<div class='container'>");
		print("Ingen treff i klasse tabellen");
		print("</div>");
		print("</div>");
	}
	else {
		print("<div class='box'>");
		print("<div class='container'>");
		print("Treff i klasse tabellen: <br><br>");


		for ($r=1; $r<=$antallRader;$r++) { 
			$rad=mysqli_fetch_array($sqlResultat);
			$klassekode=$rad["klassekode"];
			$klassenavn=$rad["klassenavn"];

			$tekst="$klassekode $klassenavn";

			$tekstlengde=strlen($tekst);
			$sokestrenglengde=strlen($sokestreng);
			$startpos=stripos($tekst,$sokestreng);
			$hode=substr($tekst,0,$startpos);
			$hale=substr($tekst,$startpos+$sokestrenglengde,$tekstlengde-$startpos-$sokestrenglengde);

			print("$hode<strong>$sokestreng</strong>$hale");


		}
		print("</div>");
		print("</div>");
	}

/* SØK I STUDENT TABELL */

	$sqlSetning="SELECT * FROM student WHERE brukernavn LIKE '%$sokestreng%' OR fornavn LIKE '%$sokestreng%' OR etternavn LIKE '%$sokestreng%' OR klassekode LIKE '%$sokestreng%';";
	$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
	$antallRader=mysqli_num_rows($sqlResultat);

	if ($antallRader==0) {
		print("<div class='box'>");
		print("<div class='container'>");
		print("Ingen treff i student tabellen");
		print("</div>");
		print("</div>");
	}
	else {
		print("<div class='box'>");
		print("<div class='container'>");
		print("Treff i student tabellen: <br><br>");


		for ($r=1; $r<=$antallRader;$r++) { 
			$rad=mysqli_fetch_array($sqlResultat);
			$brukernavn=$rad["brukernavn"];
			$fornavn=$rad["fornavn"];
			$etternavn=$rad["etternavn"];
			$klassekode=$rad["klassekode"];

			$tekst="$brukernavn $fornavn $etternavn $klassekode";

			$tekstlengde=strlen($tekst);
			$sokestrenglengde=strlen($sokestreng);
			$startpos=stripos($tekst,$sokestreng);
			$hode=substr($tekst,0,$startpos);
			$hale=substr($tekst,$startpos+$sokestrenglengde,$tekstlengde-$startpos-$sokestrenglengde);

			print("$hode<strong>$sokestreng</strong>$hale");


		}
		print("</div>");
		print("</div>");
	}






}



?>

<!-- SLUTT PÅ PHP -->




</main>

</body>
</html>