

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
<h2>Vis registrert data i klasse.txt</h2>
<div class="container">
<!-- START PÅ PHP -->
<!-- START PÅ PHP -->
<!-- START PÅ PHP -->
<form method="post" action="" id="vis-data" name="vis-data"/>
Brukernavn <input type="text" id="brukernavn" name="brukernavn" required/><br>
Fornavn <input type="text" id="fornavn" name="fornavn" required/><br>
Etternavn <input type="text" id="etternavn" name="etternavn" required/><br>
Klassekode <input type="text" id="klassekode" name="klassekode" required /><br>
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/><br>
		<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
</form>
</div>
</div>

<!-- START PÅ PHP -->
<?php

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


?>
<!-- SLUTT PÅ PHP -->

<!-- JAVASCRIPT MELDING  -->
<div id="melding"></div>
</div>


</main>

</body>
</html>



