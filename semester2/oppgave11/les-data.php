

<!DOCTYPE html>
<html>
<head>
	<title>VISE KLASSE</title>

    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<!-- INKLUDERER HOVEDMENY -->
<div class="leftside">
<?php include "./meny.php"; ?>
</div>
<!-- VIS STUDENT -->
<main>
<div class="rightside">
<div class="box">
<h2>Vis registrert data</h2>
<div class="container">
<!-- START PÅ PHP -->
<!-- START PÅ PHP -->
<!-- START PÅ PHP -->
<form method="post" action="" id="les-data" name="les-data"/>
Tabellnavn: <select id="VelgTabell" name="VelgTabell" required/>
<option value="fag">Fag</option>
<option value="oppgave">Oppgave</option>
</select><br><br>
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
		<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
</form>
</div>
</div>

<!-- START PÅ PHP -->
<?php

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
 	
 

include("./db-tilkobling.php");
$tabell=$_POST["VelgTabell"];
$sqlSetning="SELECT * FROM $tabell;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .@mysqli_error() );
$antallRader=mysqli_num_rows($sqlResultat);





if ($tabell == "fag") {
	
	for ($r=1;$v<=$antallRader;$v++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$fagkode=$rad["fagkode"];
	$fagnavn=$rad["fagnavn"];
	$faglaerer=$rad["faglaerer"];
	print("$fagkode $fagnavn $faglaerer </br>");
}
}
else {
		for ($v=1;$v<=$antallRader;$v++) {

	$rad=mysqli_fetch_array($sqlResultat);
	$fagkode=$rad["fagkode"];
	$oppgavenr=$rad["oppgavenr"];
	$frist=$rad["frist"];
	print("$fagkode $oppgavenr $frist </br>");

}

}

}


?>

<?php
/*
@$fortsett=$_POST["fortsett"];

if ($fortsett) {
    //$filnavn=("./temp/klasse.txt");
    $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/klasse.txt";
$filoperasjon="r";                      
$fil=fopen($filnavn, $filoperasjon);    

while ($linje=fgets($fil)) {            
    print("$linje<br>");                
}
fclose($fil);       
}

*/
?>

<!-- SLUTT PÅ PHP -->




</main>

</body>
</html>



