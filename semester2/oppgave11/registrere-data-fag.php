<!DOCTYPE html>
<html>
<head>
	<title>Registrere data i tabell fag</title>


    <link rel="stylesheet" type="text/css" href="./style.css">


</head>
<body>
<!-- INKLUDERER HOVEDMENY -->
<div class="leftside">
<?php include "./meny.php"; ?>
</div>

<!-- REGISTRERE STUDENT -->
<main>
<div class="rightside">
<div class="box">
<h2>Registrer i tabell: Fag</h2>
<div class="container">
<form method="post" action="" id="reg-student" name="reg-student"/>
Fagkode <input type="text" id="fagkode" name="fagkode" required/><br>
Fagnavn <input type="text" id="fagnavn" name="fagnavn" required/><br>
Faglærer <input type="text" id="faglaerer" name="faglaerer" required /><br>
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
		<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
</form>
</div>
</div>
<!-- PHP SKJEMA STARTER HER -->

<?php

@$fortsett=$_POST["fortsett"];

if ($fortsett) {

$fagkode=$_POST["fagkode"];
$fagnavn=$_POST["fagnavn"];
$faglaerer=$_POST["faglaerer"];

if (!$fagkode || !$fagnavn || !$faglaerer) {
	print ("Alle felt må fylles ut");
}

else {

	include("./db-tilkobling.php");
	$sqlSetning="INSERT INTO fag VALUES('$fagkode','$fagnavn','$faglaerer');";
	mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() );
	print("Data er nå registrert");	

}


}

?>

</div>
</main>
</body>
</html>