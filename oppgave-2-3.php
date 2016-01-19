<?php

$student=$_POST["student"];
$alder=$_POST["alder"];

if (!$student||!$alder) {
	print ("Begge feltene må fylles ut.");
}

elseif (($student=="j" ||$student=="ja") && $alder<20) {
	print ("Du er student og er ikke over 20...");
}

elseif $student=="n" && $alder<20) {
	print ("Du er ikke student, men er ikke over 20...");
}

elseif $student=="n" && $alder>20) {
	print ("Du er ikke student, men er over 20...");
}

elseif $student=="j" && $alder>20) {
	print ("Du er student, men er over 20...");
}

else
	print("Du har ikke svart...");
?>