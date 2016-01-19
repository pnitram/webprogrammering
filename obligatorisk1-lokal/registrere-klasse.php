<!DOCTYPE html>
<html>
<head>
	<title>Registrere klasse</title>


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
<h2>Registrere klasse</h2>
<div class="container">
<form method="post" action="" id="reg-klasse" name="reg-klasse"/>
Klassekode <input type="text" id="klassekode" name="klassekode" required /><br>
Klassenavn <input type="text" id="klassenavn" name="klassenavn"required /><br>
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

//---- MED VALIDERING -----

@$fortsett=$_POST["fortsett"];
	@$klassekode=$_POST["klassekode"];
	@$klassenavn=$_POST["klassenavn"];

if ($fortsett) {
if (!$klassekode || !$klassenavn) {
	print("Begge felt må være fyllt ut.<br>");
}

else {

$filnavn=("./temp/klasse.txt");
//$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/klasse.txt";
$filoperasjon="a";
$linje=$klassekode.";".$klassenavn."\n";
$fil=fopen($filnavn, $filoperasjon);
fwrite($fil, $linje);
fclose($fil);
}
}

/* ---UTEN VALIDERING ----

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
	$klassekode=$_POST["klassekode"];
	$klassenavn=$_POST["klassenavn"];


$filnavn=("./temp/klasse.txt");
$filoperasjon="a";
$linje=$klassekode.";".$klassenavn."\n";
$fil=fopen($filnavn, $filoperasjon);
fwrite($fil, $linje);
fclose($fil);
}
*/



?>