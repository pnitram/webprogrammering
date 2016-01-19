<!DOCTYPE html>
<html>
<head>
	<title>nesting loops - 5.8 </title>
</head>

<body>

<?php  

print "<table boarder=\"1\">\n";
for ($y=1; $y <= 20; $y++) { 
	print "<tr>\n";
	for ($x=1; $x <= 12; $x++) { 
		print "\t<td>";
		print ($x*$y);
		print "</td>\n";
	}
	print "</tr>\n";
}
print "</table>";
?>


</body>
</html>