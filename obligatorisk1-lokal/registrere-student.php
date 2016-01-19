<!DOCTYPE html>
<html>
<head>
	<title>Registrere student</title>


    <style type="text/css">
    .container {
        width: 220px;
        clear: both;
        text-align: center;
    }
    .container input {
        width: 100%;
        clear: both;
        margin-bottom: 2%;
    }

    </style>


</head>
<body>

<main>
<h2>Registrere student</h2>
<div class="container">
<form method="post" action="" id="reg-student" name="reg-student"/>
Brukernavn <input type="text" id="brukernavn" name="brukernavn" /><br>
Fornavn <input type="text" id="fornavn" name="fornavn" /><br>
Etternavn <input type="text" id="etternavn" name="etternavn" /><br>
Klassekode <input type="text" id="klassekode" name="klassekode" /><br>
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
		<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
</form>
</div>
</main>
<footer>
    <p><a href="./index.php">Tilbake til meny</a>
</footer>

</body>
</html>



<?php

@$fortsett=$_POST["fortsett"];
    
    @$brukernavn=$_POST["brukernavn"];
    @$fornavn=$_POST["fornavn"];
    @$etternavn=$_POST["etternavn"];
	@$klassekode=$_POST["klassekode"];


if ($fortsett) {
if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {
	print("Feltene er ikke fyllt ut.<br>");
}

else {

$filnavn=("./temp/student.txt");
//$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/student.txt";
$filoperasjon="a";
$linje=$brukernavn.";".$fornavn.";".$etternavn.";".$klassekode."\n";
$fil=fopen($filnavn, $filoperasjon);
fwrite($fil, $linje);
fclose($fil);
}
}

?>