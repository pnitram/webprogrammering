<!DOCTYPE html>
<html>
<head>
	<title>SLETT DATA REGISTRERT I TABELL</title>

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
<h2>Slett registrert data</h2>
<div class="container">
<form method="post" action="" id="slett-data" name="slett-data" onSubmit="return bekreft()"/>
Velg tabell: <select name='velgTabell' id='velgTabell'>
<?php include("./listeboks-tabell.php"); ?> <br>

</select>
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
		<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
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
	print("<input type='submit' value='Slett klasse' id='fortsettKlasse' name='fortsettKlasse'/>");
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
	print("<input type='submit' value='Slett student' id='fortsettStudent' name='fortsettStudent'/>");
	print("</form>");
	print("</div>");
	print("</div>");
}

}

$fortsettKlasse=$_POST["fortsettKlasse"];
if ($fortsettKlasse) {

	$klassekode=$_POST["velgKlasse"];

	$sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode'";
	mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette. Muligens et problem med referanseintegritet?: " .mysqli_error() );
	print("Data ble slettet!");
	


}
/////////////////////////////////////////////////////////////////////////////////////////////
$fortsettStudent=$_POST["fortsettStudent"];
if ($fortsettStudent) {

	$brukernavn=$_POST["velgStudent"];

	$sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn'";
	mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette. Muligens et problem med referanseintegritet?: " .mysqli_error() );
	print("Data ble slettet!");
	

}



?>

<!-- SLUTT PÅ PHP -->




</main>

</body>
</html>