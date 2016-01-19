

<!DOCTYPE html>
<html>
<head>
	<title>VIS STUDENT.TXT</title>
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
<h2>Vis registrert data i student.txt</h2>
<div class="container">
<form method="post" action="" id="vis-student" name="vis-student"/>
<input type="submit" value="Vis student.txt" id="fortsett" name="fortsett"/> <br />
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
	$filnavn=("./temp/student.txt");
    //$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/student.txt";
$filoperasjon="r"; 						
$fil=fopen($filnavn, $filoperasjon); 	

while ($linje=fgets($fil)) { 			
	print("$linje<br>");    			
}
fclose($fil);		
}


?>



