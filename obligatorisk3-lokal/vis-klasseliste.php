
<!DOCTYPE html>
<html>
<head>
	<title>VIS KLASSELISTE</title>
	<meta charset="UTF-8">
	<script src="hendelser.js"></script>
	<link rel="stylesheet" type="text/css" href="./style.css">

</head>
<body>
<!-- INKLUDERER HOVEDMENY -->
<div class="leftside">
<?php include "./meny.php"; ?>
</div>
<!-- VIS KLASSELISTE -->
<main>
<div class="rightside">
<div class="box">
<h2>Vis klasseliste</h2>
<div class="container">
<form method="post" action="" id="vis-klasseliste" name="vis-klasseliste"/>
Søk <input type="text" id="search" name="search" onfocus="fokus(this)" onblur="mistetFokus(this)" onmouseover="musOverKL(this)" onmouseout="musUt(this)" required /><br>
<input type="submit" value="Vis klasseliste" id="fortsett" name="fortsett"/> <br />
</form>
</div>
</div>
<!-- START PÅ PHP-->
<?php

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
	$hent=$_POST["search"];
	$hent=strtoupper($hent);
	//$filnavn=("./temp/student.txt");
	$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/student.txt";
	$filoperasjon="r"; 						
	$fil=fopen($filnavn, $filoperasjon);

while ($linje=fgets($fil)) {
	if ($linje!="") {
		$del=explode(";", $linje);
		$brukernavn=trim($del[0]);
		$fornavn=trim($del[1]);
		$etternavn=trim($del[2]);
		$klassekode=trim($del[3]);
		
		if ($hent==$klassekode)
		{
			print("$brukernavn, $fornavn, $etternavn, $klassekode <br>");
		}
	


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