<?php
//---------------REPETISJONSSETNINGER OG ARRAYS-------------------
//------------------WHILE SETNINGER-------------------------------


$tall = '1';
while ( $tall <= 10) 
{
	echo ("$tall <br>");
	$tall = $tall +1;
}




//-------------FOR SETNING-------------------------------------
//   start

/*for ($tall=1; $tall<=10; $tall++) { 
	echo ("$tall <br>");
}
*/

//----------------ARRAY-------------------------------------

//-----INDEX-------VERDIER-------
//
//        0          GEIR
//        1          MARIUS
//        2          SHEGAW


$navn=array("Geir", "Marius","Shegaw");
$navn[3]="Lasse";
print("<br>Det første navnet er $navn[0]<br>");

print("Alle navnene er:<br><br>");

for ($num=0; $num <=3 ; $num++) { 
	print("$navn[$num]<br>");
}



print("<br>");
/*
$antallDager[1]=31;
$antallDager[2]=28;
osv*/
print("<br>");
//---------------eks 5 -------------- oppdeling av tekse------------
//----explode deler opp tekst og setter i array

$tekst ="Geir Bjarvin Høyskolelektor HBV";
$del=explode(" ", $tekst);

$fornavn=$del[0];
$etternavn=$del[1];
print("Hele teksen er $tekst <br>");
echo ("$fornavn $etternavn");

?>


<?php
//------------------------eks6 (bergening av sum----------------------------------)

$sum= 0;

for ($tall=1; $tall <= 10 ; $tall++) { 
	$sum=$sum+$tall;

}


echo  "<br><br>Summen av tallene er $sum<br>";

?>
<?php 

//--------------------------eks7 brukern styrer repetisjon-------------------



//HTML SKJEMA MED <input ..... name="antall" .....>


$antall= $_POST ["antall"];


$antall=666;
if ($antall <=0) {
	print ("Antallet må være et positivt tall");
} else {
	for ($tall=1; $tall<=$antall ; $tall++) { 
		print("$tall <br>");
	}
}



?>