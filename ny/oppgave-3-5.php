<?php  


$sum=0;

for ($tall=1; $tall <=10 ; $tall++) { 
	$sum=$sum+$tall;
}

$gjennomsnitt=$sum/10;

print("Summen av alle tallene er $sum<br>");
print("Gjennomsnitt er $gjennomsnitt");
?>