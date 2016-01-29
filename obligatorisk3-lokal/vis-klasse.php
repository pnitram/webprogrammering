

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
<form method="post" action="" id="vis-klasse" name="vis-klasse"/>
<input type="submit" value="Vis klasse.txt" id="fortsett" name="fortsett"/> <br />
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



