<!DOCTYPE html>
<html>
<head>
	<title>Funksjoner</title>
</head>
<body>

<h1></h1>

<main>

<section>
	
	<?php 


		 
	/* function some_function( $argument1, $argument2) {
	//functioncode
	}
	*/
	function seb() {
		print "<h1>HALLO SEBASTIAN!</h1>";
	}

	seb();

	function printbr ( $txt ) {
		print ("$txt<br>\n");
	}

	printbr("hei på deg");
	printbr("dette er en ny linje");

	function addnum( $firstnum, $secondnum ) {
		$result = $firstnum + $secondnum;
		return $result+seb();
	}

	print addnum(50,4);

	 ?>
</section>


</main>

</body>
</html>