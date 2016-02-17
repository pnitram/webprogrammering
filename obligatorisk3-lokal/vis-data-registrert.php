

<!DOCTYPE html>
<html>
<head>
	<title>VISE DATA REGISTRERT I TABELL</title>

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
<h2>Vis registrert data i tabell</h2>
<div class="container">
<form method="post" action="" id="les-data" name="les-data"/>
Tabellnavn: <select id="VelgTabell" name="VelgTabell" required/>
<option value="klasse">Klasse</option>
<option value="student">Student</option>
</select><br>
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
</form>
</div>
</div>
<!-- PHP KODE STARTER -->
<?php

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
 	
include("./db-tilkobling.php");
$tabell=$_POST["VelgTabell"];
$sqlSetning="SELECT * FROM $tabell;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader=mysqli_num_rows($sqlResultat);


if ($tabell == "klasse") {

	print("<div class='box'>");
	
	for ($v=1;$v<=$antallRader;$v++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$klassekode=$rad["klassekode"];
	$klassenavn=$rad["klassenavn"];
	$faglaerer=$rad["faglaerer"];
	
	print("$klassekode, $klassenavn </br>");

}
print("</div>");
}
else {

		print("<div class='box'>");
		for ($r=1;$r<=$antallRader;$r++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$brukernavn=$rad["brukernavn"];
	$fornavn=$rad["fornavn"];
	$etternavn=$rad["etternavn"];
	$klassekode=$rad["klassekode"];
	
	print("$brukernavn, $fornavn, $etternavn, $klassenavn </br>");
	

}
print("</div>");
}

}


?>

<!-- SLUTT PÅ PHP -->




</main>

</body>
</html>



