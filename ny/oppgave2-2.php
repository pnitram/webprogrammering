<?php 

$svar=$_POST ["svar"];

if ($svar == "j" || $svar == "ja" || $svar == "J" || $svar == "JA" || $svar == "Ja") 
{
	print ("Du har svart ja på spørsmålet om du er student");
} 

elseif ($svar == "n" || $svar == "nei" || $svar == "N" || $svar == "NEI" || $svar == "Nei") {
	print ("Du har svart nei på spørsmålet om du er student.");
}

elseif (!$svar) {
	print("Du har ikke svart");
}

else 
{
	print ("Du har ikke svart ja eller nei på spørsmålet om du er student");
}


?>