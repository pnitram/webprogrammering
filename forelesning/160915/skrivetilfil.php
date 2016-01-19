<?php
print("<h1 style='text-align:center' > Forelesning PHP 16.09.15 </h1><br>");

/*$fornavn="martin";
$etternavn="pedersen";*/

/*
$fornavn=$_POST["fornavn"];
$etternavn=_$POST["etternavn"];
if (!$fornavn||!$etternavn) {
	print("Begge felt må være fylt ut");
}
*/
//$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/navn.txt";

/* append= føye til */
/*
$filnavn=("../temp/navn.txt");
$filoperasjon="a";
$linje=$fornavn." ".$etternavn."\n";
$fil=fopen($filnavn, $filoperasjon);
fwrite($fil, $linje);
fclose($fil);

*/
/* ----- LESE FRA FIL --------*/

$filnavn=("../temp/navn.txt");
$filoperasjon="r"; 						
$fil=fopen($filnavn, $filoperasjon); 	

while ($linje=fgets($fil)) { 			
	print("$linje<br>");    			
}										
fclose($fil);

// bytte om navn
/*
while ($linje=fgets($fil)) {
	if ($linje!="") {
		$del=explode(" ", $linje);
		$fornavn=$del[0];
		$etternavn=$del[1];
		print("$etternavn, $fornavn<br>");
	}
}


//fjerne mellomrom med trim

$navn="martin pedersen";

$navn=$_POST["navn"];
$navn=trim($navn);
$filnavn=("../temp/navn.txt");
$filoperasjon="r"; 
$fil=fopen($filnavn, $filoperasjon);

while ($linje=fgets($fil)) {
	if ($linje!="") {
		$del=explode(" ", $linje);
		$fornavn=trim($del[0]);
		$etternavn=trim($del[1]);
		
		if ($navn==$fornavn||$navn==$etternavn)
		{
			print("$fornavn, $etternavn");
		}
	


	}	
}


//$strposFornavn=strapos($fornavn, $navn);
//$strposEtternavn=strapos($etternavn, $navn);
//if (condition) {strpos
	# code...
//}
//$startposFornavn!==fals||$startposEtternavn!||fals)
*/
?>
