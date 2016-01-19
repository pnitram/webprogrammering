<?php 

$gift=$_POST ["gift"];
$barn=$_POST ["barn"];

if ($gift =="j" && $barn == "j") {
	print ("Du er gift og har barn.");
} 
elseif ($gift =="j" && $barn == "n") {
	print ("Du er gift, men har ikke barn.");
}

elseif ($gift =="n" && $barn == "j") {
	print("Du er ikke gift, men har barn.");
}

elseif ($gift =="n" && $barn == "n") {
	print("Du er ikke gift og har ikke barn.");
}

elseif (!$gift || !$barn) {
	print("Du må fylle ut begge feltene.");
}

else {
	print("Du må svare j eller n på spørsmålet");
}

?>