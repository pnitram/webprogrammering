

<!DOCTYPE html>
<html>
<head>
	<title>VISE KLASSE</title>
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
<h2>Vis registrert data i klasse.txt</h2>
<div class="container">
<form method="post" action="" id="vis-klasse" name="vis-klasse"/>
<input type="submit" value="Vis klasse.txt" id="fortsett" name="fortsett"/> <br />
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
	$filnavn=("./temp/klasse.txt");
	//$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/klasse.txt";
$filoperasjon="r"; 						
$fil=fopen($filnavn, $filoperasjon); 	

while ($linje=fgets($fil)) { 			
	print("$linje<br>");    			
}
fclose($fil);		
}


?>



