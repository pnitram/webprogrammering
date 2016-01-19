<!DOCTYPE html>
<html>
<head>
	<title>Listing 5.1 5.3 5.4 5.5- an if statement</title>
	<meta charset="utf-8">
</head>
<body>
<div>
	
<?php
/*
$satisfied="noe";
if ($satisfied == "very") {
	print "We are pleased that you are happy with our service";
	// register customer satisfaction in some way
} 	elseif ($satisfied == "no") {
	print "We are sorry that we have not met your expectations";
} 	else {
	print "Please take a moment to rate our service";
		// present pulldown
}
*/
####
/*
$satisfied="no";
switch ($satisfied) {
	case 'very':
		Print "We are pleased that you are happy with our service";
		break;
	case 'no':
		print "We are sorry that we have not met your expectations";
		break;
	
	default:
		print "Please take a moment to rate our service";
		break;
}
*/
####

$satisfied="very";
$pleased= "We are pleased that you are happy with our service";
$sorry= "We are sorry that we have not met your expectations";

$text= ($satisfied=="very")?$pleased:$sorry;
print "$text";

####
?>

</div>
</body>
</html>