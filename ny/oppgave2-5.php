<?php  

$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
$tall3=$_POST ["tall3"];

if ($tall3==1) {

	$resultat=$tall1 + $tall2;


	print("Tall 1 er $tall1 <br>");
	print("Tall2 er $tall2 <br>");
	print ("Regneoperasjonen er Addisjon. <br>
			Resultatet av regneoperasjonen er $resultat"); 
}

elseif ($tall3==2) {
	
	$resultat=$tall1-$tall2;

	print("Tall 1 er $tall1 <br>");
	print("Tall2 er $tall2 <br>");
	print ("Regneoperasjonen er Subtrasjon. <br>
			Resultatet av regneoperasjonen er $resultat");
}

elseif ($tall3==3) {
	
	$resultat=$tall1*$tall2;

	print("Tall 1 er $tall1 <br>");
	print("Tall2 er $tall2 <br>");
	print ("Regneoperasjonen er Multiplikasjon. <br>
			Resultatet av regneoperasjonen er $resultat");
}

elseif ($tall3==4) {
	
	$resultat=$tall1/$tall2;

	print("Tall 1 er $tall1 <br>");
	print("Tall2 er $tall2 <br>");
	print ("Regneoperasjonen er Divisjon. <br>
			Resultatet av regneoperasjonen er $resultat");
}
else 
	print ("Fyll ut tall korrekt.");
?>