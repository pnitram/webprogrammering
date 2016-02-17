<!DOCTYPE html>
<html>
<head>
	<title>Registrere data i tabell oppgave</title>


    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="funksjoner.js"></script>

</head>
<body>
<!-- INKLUDERER HOVEDMENY -->
<div class="leftside">
<?php include "./meny.php"; ?>
</div>


<main>
<div class="rightside">
<div class="box">
<h2>Slett fag</h2>
<div class="container">
<form method="post" action="" id="reg-student" name="reg-student" onSubmit="return bekreft()"/>
<select name='fagkode' id='fagkode'>
	<?php include("./listeboks-fagkode.php"); ?> <br>

</select>
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
$sqlSetning="DELETE FROM fag WHERE fagkode='$fagkode';";
mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() );
print("DISSE FAG ER SLETTET: $fagkode <br>");

}


?>
</div>
</main>
</body>
</html>