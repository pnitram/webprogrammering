<!DOCTYPE html>
<html>
<head>
	<title>Registrere student</title>


    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="hendelser.js"></script>
    <script src="validering.js"></script>


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
<h2>Registrere student</h2>
<div class="container">
<form method="post" action="" id="reg-student" name="reg-student" onsubmit="return validerRegistrerStudent()" />
Brukernavn: <input type="text" id="brukernavn" name="brukernavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRS(this)" onmouseout="musUt(this)" required/><br>
Fornavn: <input type="text" id="fornavn" name="fornavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRS(this)" onmouseout="musUt(this)" required/><br>
Etternavn: <input type="text" id="etternavn" name="etternavn" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRS(this)" onmouseout="musUt(this)" required/><br>
Klassekode: <input type="text" id="klassekode" name="klassekode" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverRS(this)" onmouseout="musUt(this)" onchange="tilStore(this)" /* onkeyup="finn(this.value)"*/ required /><br>
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
		<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
</form>
</div>
</div>
<!-- PHP SKJEMA STARTER HER -->
<?php

@$fortsett=$_POST["fortsett"];
    
    @$brukernavn=$_POST["brukernavn"];
    @$fornavn=$_POST["fornavn"];
    @$etternavn=$_POST["etternavn"];
	@$klassekode=$_POST["klassekode"];
    @$klassekode=strtoupper($klassekode);


if ($fortsett) {
if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {
	print("Feltene er ikke fyllt ut.<br>");
}

else {

        include("./valider-klassekode.php");
        $lovligKlassekode=validerklassekode($klassekode);

            if (!$lovligKlassekode) {
                print("Klassekoden er ikke korrekt fyllt ut");
                    }

            else { 

                include("./db-tilkobling.php");
                $sqlSetning="INSERT INTO student VALUES('$brukernavn','$fornavn', '$etternavn', '$klassekode');";
                mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() );
                print("Data er nå registrert"); 
        }

    }

}





    

?>
<!-- SLUTT PÅ PHP -->

<!-- JAVASCRIPT MELDING  -->
<div id="melding"></div>


</div>
</main>
</body>
</html>