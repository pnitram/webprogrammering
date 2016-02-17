<!DOCTYPE html>
<html>
<head>
	<title>ENDRE DATA REGISTRERT I TABELL</title>
	<meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="./style.css">
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
	print("<strong>Velg klasse: </strong><select name='velgKlasse' id='velgKlasse'>");
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
	print("<strong>Velg student: </strong><select name='velgStudent' id='velgStudent'>");
	include("./listeboks-student.php");
	print("");
	print("</select>");
	print("<input type='submit' value='Fortsett' id='fortsettStudent' name='fortsettStudent'/>");
	print("</form>");
	print("</div>");
	print("</div>");
}

}

$fortsettKlasse=$_POST["fortsettKlasse"];
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
		print("<h3>Endre $klassenavn:</h3>");
		print("Klassekode: <input type='text' id='klassekode' name='klassekode' value='$klassekode' readonly /> <br />");
		print("Klassenavn: <input type='text' id='klassenavn' name='klassenavn' value='$klassenavn' />"); ///FINNE UT AV DETTE
		print("<br><input type='submit' value='Endre' id='fortsett3' name='fortsett3'/>");
		print("<input type='reset' value='Nullstill' id='nullstill' name='nullstill'/>");
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
$fortsettStudent=$_POST["fortsettStudent"];
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
		print("<h3>Endre $fornavn $etternavn:</h3> ");
		print("Brukernavn: <input type='text' id='brukernavn' name='brukernavn' value='$brukernavn' readonly /> <br />");
		print("Fornavn: <input type='text' id='fornavn' name='fornavn' value='$fornavn' />");
		print("Etternavn: <input type='text' id='etternavn' name='etternavn' value='$etternavn' /> <br />");
		print("Klassekode: <input type='text' id='klassekode' name='klassekode' value='$klassekode' readonly />");
		print("<br><input type='submit' value='Endre' id='fortsett4' name='fortsett4'/>");
		print("<input type='reset' value='Nullstill' id='nullstill' name='nullstill'/>");
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

		$sqlSetning="UPDATE student SET fornavn='$fornavn', etternavn='$etternavn' WHERE brukernavn='$brukernavn';";
		mysqli_query($db, $sqlSetning) or die ("Ikke mulig å endre i $database: " .mysqli_error() );
		print("Data er endre på student med brukernavn $brukernavn");
	}


}



?>

<!-- SLUTT PÅ PHP -->




</main>

</body>
</html>