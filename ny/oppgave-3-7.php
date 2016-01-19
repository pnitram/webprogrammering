<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<form method="post" action="" id="oppgave2-5" name="opgave2-5">
Navn	 	<input type="text" id="navn" name="navn" required /> <br>
			<input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
			<input type="reset" value="Nullstill" id="nullstill" name="nullstill" />


</body>
</html>


<?php
echo "<br>";

@$fortsett=$_POST ["fortsett"];

if ($fortsett){

	$navn=$_POST ["navn"];

	$del=explode(" ", $navn);
	$fornavn=$del[0];
	$etternavn=$del[1];

print("<br>Fornavnet ditt er $fornavn<br>");
print("<br>Etternavnet ditt er $etternavn");


}






?>