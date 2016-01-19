<!DOCTYPE html>
<html>

<head>
    <title>Øvingsoppgave 2-5</title>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<h1>Martin's kalkulator</h1>
<form method="post" action="" id="oppgave2-5" name="opgave2-5">
Tall1	 	<input type="text" id="tall1" name="tall1" required /> (Valgfritt tall)<br>
Tall2  		<input type="text" id="tall2" name="tall2" required /> (Valgfritt tall)<br>
Type  		<input type="text" id="tall3" name="tall3" required /> (Velg et tall mellom 1-4 for regneoperasjon)<br>
			<input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
			<input type="reset" value="Nullstill" id="nullstill" name="nullstill" />
	
</form>
<p> Velg en av følgende i siste felt: </p>
<p>1: For addisjon<br>2: For subtraksjon<br>3: For multiplikasjon<br>4: For divisjon</p>
<hr>

</body>

</html>

<?php 

@$fortsett=$_POST ["fortsett"];

if ($fortsett) {
	$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
$tall3=$_POST ["tall3"];

if ($tall3==1) {

	$resultat=$tall1 + $tall2;


	print("<br>Tall 1 er $tall1 <br>");
	print("Tall2 er $tall2 <br>");
	print ("<br>Regneoperasjonen er Addisjon. <br>
			Resultatet av regneoperasjonen er $resultat"); 
}

elseif ($tall3==2) {
	
	$resultat=$tall1-$tall2;

	print("<br>Tall 1 er $tall1 <br>");
	print("Tall2 er $tall2 <br>");
	print ("<br>Regneoperasjonen er Subtrasjon. <br>
			Resultatet av regneoperasjonen er $resultat");
}

elseif ($tall3==3) {
	
	$resultat=$tall1*$tall2;

	print("<br>Tall 1 er $tall1 <br>");
	print("Tall2 er $tall2 <br>");
	print ("<br>Regneoperasjonen er Multiplikasjon. <br>
			Resultatet av regneoperasjonen er $resultat");
}

elseif ($tall3==4) {
	
	$resultat=$tall1/$tall2;

	print("<br>Tall 1 er $tall1 <br>");
	print("Tall2 er $tall2 <br>");
	print ("<br>Regneoperasjonen er Divisjon. <br>
			Resultatet av regneoperasjonen er $resultat");
}
else 
	print ("<br>Fyll ut tall og type korrekt.");
}



?>