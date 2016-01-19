<?php 

$sum=$_POST["svar"];
if (!$svar) {
	print("Du har ikke svart...");

elseif ($svar=="j"||$svar=="J")||$svar=="Ja"||$svar="JA"||$svar="y"||$svar="yes") {
	print("Du har svart ja..");
}

elseif ($svar=="n"||$svar=="N")||$svar=="Nei"||$svar="NEI"||$svar="no") {
	print("Du har svart nei...");
}

else 
	print("Du har svart noe annet");

?>