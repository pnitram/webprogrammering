<?php  

$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
$tall3=$_POST ["tall3"];

print("Tall 1 er $tall1<br>");
print("Tall 2 er $tall2<br>");
print("Tall 3 er $tall3<br>");
print("<br>");

if ($tall1==$tall2) {
	print("Tall 1 er lik Tall 2.<br>");
} elseif ($tall1<$tall2) {
	print("Tall 1 er mindre Tall 2.<br>");
} elseif ($tall1>$tall2) {
	print("Tall 1 er større Tall 2.<br>");
}

if ($tall1==$tall3) {
	print("Tall 1 er lik Tall 3.<br>");
} elseif ($tall1<$tall3) {
	print("Tall 1 er mindre Tall 3.<br>");
} elseif ($tall1>$tall3) {
	print("Tall 1 er større Tall 3.<br>");
}

if ($tall2==$tall3) {
	print("Tall 2 er lik Tall 3.<br>");
} elseif ($tall2<$tall3) {
	print("Tall 2 er mindre Tall 3.<br>");
} elseif ($tall2>$tall3) {
	print("Tall 2 er større Tall 3.<br>");
}
?>