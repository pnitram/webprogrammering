<!DOCTYPE html>
<html>
<head>
	<title>Listing 5.6 -A while statement</title>
	<meta charset="utf-8">
</head>
<body>
<div>
<?php 
/*
$counter = 1;
while ( $counter <= 12 ) {
	print "$counter times 2 is " .($counter*2). "<br />";
	$counter++;
}
*/

####

/*
$num = 1;
do {
	print "Execution number: $num<br />\n";
	$num++;
}	while ( $num > 200 && $num <400 );
*/

####

/*
for ($counter=1; $counter <=12 ; $counter++) { 
	print"$counter times 2 is ".($counter*2)."<br />";
}
*/

####
$counter=-4;
for (; $counter <= 10 ; $counter++) {
	if ( $counter == 0 ) {
		continue;
	} 
	 $temp =4000/$counter;
	 print "4000 divided by $counter is.. $temp<br />";
	}

?>
<div>


</body>
</html>