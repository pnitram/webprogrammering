<?php  

$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];

if ($tall1 == $tall2) {
	print("Tall 1 er $tall1 <br>");
	print("Tall 2 er $tall2 <br>");
	print("<br>Tall 1 er lik Tall 2");
}

elseif ($tall1 < $tall2) {
	print("Tall 1 er $tall1 <br>");
	print("Tall 2 er $tall2 <br>");
	print("<br>Tall 1 er mindre Tall 2");
}

elseif ($tall1 > $tall2) {
	print("Tall 1 er $tall1 <br>");
	print("Tall 2 er $tall2 <br>");
	print("<br>Tall 1 er større enn Tall 2");
}

else
	Print ("Du må taste korrekt!")

?>