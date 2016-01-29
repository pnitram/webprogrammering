<!DOCTYPE html>
<html>
<head>
	<title>Registrere klasse</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="hendelser.js"></script>
    <script src="validering.js"></script>
    <!--<script src="validering.js"></script>-->
</head>
<body>
<!-- INKLUDERER HOVEDMENY -->
<div class="leftside">
<?php include "./meny.php"; ?>
</div>
<!-- REGISTRER KLASSE -->
<main>
<div class="rightside">
<div class="box">
<h2>Registrere klasse</h2>
<div class="container">
<form method="post" action="" id="reg-klasse" name="reg-klasse" onsubmit="return validerRegistrerKlasse()" />
Klassekode <input type="text" id="klassekode" name="klassekode" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRK(this)" onmouseout="musUt(this)" onchange="tilStore(this)" required/><br>
Klassenavn <input type="text" id="klassenavn" name="klassenavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRK(this)" onmouseout="musUt(this)" required/><br>
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
		<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
</form>
</div>
</div>
<!-- PHP SKJEMA STARTER HER -->
<?php

//---- MED VALIDERING -----

@$fortsett=$_POST["fortsett"];
    @$klassekode=$_POST["klassekode"];
    @$klassenavn=$_POST["klassenavn"];
    @$klassekode=strtoupper($klassekode);

if ($fortsett) {
if (!$klassekode || !$klassenavn) {
    print("Begge felt må være fyllt ut.<br>");
}

else {

    include("./db-tilkobling.php");
    $sqlSetning="INSERT INTO klasse VALUES('$klassekode','$klassenavn');";
    mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() );
    print("Data er nå registrert"); 
}
}

?>

<!-- SLUTT PÅ PHP -->

<!-- JAVASCRIPT MELDING  -->
<div id="melding"><br><br></div>
</div>


</main>

</body>
</html>
