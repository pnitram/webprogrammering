
<!DOCTYPE html>
<html>
<head>
	<title>VIS KLASSELISTE</title>
	<meta charset="UTF-8">
</head>
<body>

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
<h2>Vis klasseliste</h2>
<div class="container">
<form method="post" action="" id="vis-klasseliste" name="vis-klasseliste"/>
Søk <input type="text" id="search" name="search" required /><br>
<input type="submit" value="Vis klasseliste" id="fortsett" name="fortsett"/> <br />
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
