<?php

$filnavn=("./temp/klasse.txt");
$filoperasjon="r"; 						
$fil=fopen($filnavn, $filoperasjon); 	

while ($linje=fgets($fil)) { 			
	print("$linje<br>");    			
}	

?>