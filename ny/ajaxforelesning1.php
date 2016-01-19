
<<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="1-java-vis.js"></script>
</head>
<body>
<form method="get">
tekst<input type="text" name="text" onkeyup="vis(this.value)">
nullstill<input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()"/>
</form>

</body>
</html>




<?php

//TEMA 9
//ASYNKON KOMMUNIKASJON
//1-ajax-vis.php
//$tekst = $_GET["tekst"];
//1print("tekst");

$delpostnr=$_GET["postnr"];
$filnavn=("./temp/student.txt");
    //$filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/student.txt";
    $filoperasjon="r"; 						
$fil=fopen($filnavn, $filoperasjon);
print("<table border=0>")
while (...) 
	{
		if (...) 
			{
				$del=explode()
				$postnr=$del[0];
				$startpos=strpos($postnr, $delpostnr);
				if ($startpos!==false)
				{
					//print ("$postnr $poststed");
					//print ("<tr><td>$postnr $poststed </td> </tr>")
					print ("<tr><td onmouseover='fokus(this)', onmouseout='mistetfokus(this)' onclick='velgPostnr($postnr)'>
						$postnr $poststed </td></tr>");
						)				
				}
}
}
fclose(fil)
print("</table>")




//søk og velg.. nesten lik som eksempel to






?>
