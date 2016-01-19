<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<form method="post" action="" id="oppgave2-5" name="opgave2-5">
Tall	 	<input type="text" id="angittTall" name="angittTall" required /> <br>
			<input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
			<input type="reset" value="Nullstill" id="nullstill" name="nullstill" />


</body>
</html>

<?php
print("<br>");
@$fortsett=$_POST ["fortsett"];

if ($fortsett){

	$angittTall=$_POST["angittTall"];

	if ($angittTall <= 0) {
	print("$angittTall er ikke et positivt heltall <br>");
	} 
	
	else {
	for ($tall=1; $tall<=$angittTall ; $tall++) 
	{ 
		print("$tall <br>");
	}
		}
}



?>