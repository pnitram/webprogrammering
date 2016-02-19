<!DOCTYPE html>
<html>
<head>
	<title>ENDRE DATA REGISTRERT I TABELL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./style.css">
     <script src="hendelser.js"></script>
     <script src="clearForm.js"></script>
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
<h2>Endre registrert data</h2>
<div class="container">
<form method="post" action="" id="endre-data" name="endre-data" onSubmit="return bekreft()"/>
Velg tabell: <select name='velgTabell' id='velgTabell'>
<?php include("./listeboks-tabell.php"); ?> <br>

</select>
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
</form>
</div>
</div>



<!-- PHP KODE STARTER -->
<?php

@$fortsett=$_POST["fortsett"];


if ($fortsett) {
 	
include("./db-tilkobling.php");
$tabell=$_POST["velgTabell"];
$sqlSetning="SELECT * FROM $tabell;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader=mysqli_num_rows($sqlResultat);


if ($tabell == "klasse") {
	print("<div class='box'>");
	print("<div class='container'>");
	print("<form method='post' action='' id='endreKlasse' name='endreKlasse' onSubmit='return bekreft()'/>");
	print("<strong>Velg klasse: </strong><br><i>(klassekode - klassenavn)</i><select name='velgKlasse' id='velgKlasse'>");
	include("./listeboks-klassekode.php");
	print("");
	print("</select>");
	print("<input type='submit' value='Fortsett' id='fortsettKlasse' name='fortsettKlasse'/>");
	print("</form>");
	print("</div>");
	print("</div>");

}

else {

	print("<div class='box'>");
	print("<div class='container'>");
	print("<form method='post' action='' id='endreStudent' name='endreStudent' onSubmit='return bekreft()'/>");
	print("<strong>Velg student: </strong><br><i>(brukernavn - navn)</i><select name='velgStudent' id='velgStudent'>");
	include("./listeboks-student.php");
	print("");
	print("</select>");
	print("<input type='submit' value='Fortsett' id='fortsettStudent' name='fortsettStudent'/>");
	print("</form>");
	print("</div>");
	print("</div>");
}

}

@$fortsettKlasse=$_POST["fortsettKlasse"];
if ($fortsettKlasse) {

	$klassekode=$_POST["velgKlasse"];

	$sqlSetning="SELECT * FROM klasse WHERE klassekode='$klassekode'";
	$sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() );
	$antallRader=mysqli_num_rows($sqlResultat);

	if ($antallRader==0) {
		print("Klassekode er ikke registrert i tabell");
	}

	else {

		$rad=mysqli_fetch_array($sqlResultat);
		$klassekode=$rad["klassekode"];
		$klassenavn=$rad["klassenavn"];

		print("<div class='box'>");
		print("<div class='container'>");
		print("<form method='post' action='' id='endreSteg3' name='endreSteg3' onSubmit='return bekreft()'/>");
		print("<h3>Endre klassedata til:</h3> <p><b>Klassekode: </b>$klassekode <br><b>Klassenavn: </b>$klassenavn</p>");
		print("Klassekode: <i>(kan ikke endres)</i> <input type='search' id='klassekode' name='klassekode' value='$klassekode' value='$klassekode' readonly /> <br />");
		print("Nytt klassenavn: <input type='text' id='klassenavn' name='klassenavn' value='$klassenavn' onfocus='fokus(this)' onblur='mistetFokus(this)' onmouseover='musOverRK(this)' onmouseout='musUt(this)' required />"); 
		print("<br><input type='submit' value='Endre' id='fortsett3' name='fortsett3'/>");
		print("<input type='button' value='Nullstill' id='nullstill' name='nullstill' onclick='clearForm(this.form)' />");
		print("</form>");
		print("</div>");
		print("</div>");

	}

}
@$fortsett3=$_POST["fortsett3"];

if ($fortsett3){

	$klassekode=$_POST["klassekode"];
	$klassenavn=$_POST["klassenavn"];

	if (!$klassekode || !$klassenavn) {

		print("Felt må fylles ut!");
	}

	else {

		$sqlSetning="UPDATE klasse SET klassenavn='$klassenavn' WHERE klassekode='$klassekode';";
		mysqli_query($db, $sqlSetning) or die ("Ikke mulig å endre i $database: " .mysqli_error() );
		print("Data er endre i klasse med klassekode $klassekode");
	}


}
/////////////////////////////////////////////////////////////////////////////////////////////
@$fortsettStudent=$_POST["fortsettStudent"];
if ($fortsettStudent) {

	$brukernavn=$_POST["velgStudent"];

	$sqlSetning="SELECT * FROM student WHERE brukernavn='$brukernavn'";
	$sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() );
	$antallRader=mysqli_num_rows($sqlResultat);

	if ($antallRader==0) {
		print("Student er ikke registrert i tabell");
	}

	else {

		$rad=mysqli_fetch_array($sqlResultat);
		$brukernavn=$rad["brukernavn"];
		$fornavn=$rad["fornavn"];
		$etternavn=$rad["etternavn"];
		$klassekode=$rad["klassekode"];


		print("<div class='box'>");
		print("<div class='container'>");
		print("<form method='post' action='' id='endreSteg4' name='endreSteg4' onSubmit='return bekreft()'/>");
		print("<h3>Endre studentdata til:</h3><p><strong>Brukernavn:</strong> $brukernavn<br><strong>Navn:</strong> $fornavn $etternavn <br><strong>Klassekode:</strong> $klassekode </p> ");
		print("Brukernavn: <i>(kan ikke endres)</i> <input type='search' id='brukernavn' name='brukernavn' value='$brukernavn' readonly /> <br />");
		print("Fornavn: <input type='text' id='fornavn' name='fornavn' value='$fornavn' onfocus='fokus(this)' onblur='mistetFokus(this)' onmouseover='musOverRS(this)' onmouseout='musUt(this)' required/>");
		print("Etternavn: <input type='text' id='etternavn' name='etternavn' value='$etternavn' onfocus='fokus(this)' onblur='mistetFokus(this)' onmouseover='musOverRS(this)' onmouseout='musUt(this)'  required/> <br />");
		print("Velg klasse: ");
		print("<select name='klassekode'>");
		include("./listeboks-klassekode-reg.php");
		print("</select>");
		print("<br><input type='submit' value='Endre' id='fortsett4' name='fortsett4'/>");
		print("<input type='button' value='Nullstill' id='nullstill' name='nullstill' onclick='clearForm(this.form)' />");
		print("</form>");
		print("</div>");
		print("</div>");

	}

}
@$fortsett4=$_POST["fortsett4"];

if ($fortsett4){

	$brukernavn=$_POST["brukernavn"];
	$fornavn=$_POST["fornavn"];
	$etternavn=$_POST["etternavn"];
	$klassekode=$_POST["klassekode"];

	if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {

		print("Alle felt må fylles ut!");
	}

	else {

		$sqlSetning="UPDATE student SET fornavn='$fornavn', etternavn='$etternavn', klassekode='$klassekode' WHERE brukernavn='$brukernavn';";
		mysqli_query($db, $sqlSetning) or die ("Ikke mulig å endre i $database: " .mysqli_error() );
		print("Data er endre på student med brukernavn $brukernavn");
	}


}



?>

<!-- SLUTT PÅ PHP -->



<!-- JAVASCRIPT MELDING  -->
<div id="melding"></div>

</main>

</body>
</html>