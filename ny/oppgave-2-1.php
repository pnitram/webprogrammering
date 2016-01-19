<!DOCTYPE html>
<html>

<head>
    <title>Øvingsoppgave 2-1</title>
</head>

<body>
<form method="post" action="" id="oppgave2-1" name="opgave2-1">
Hvor mye er 2x3? 	<input type="text" id="tall" name="tall" required /> <br>
					<input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
					<input type="reset" value="Nullstill" id="nullstill" name="nullstill" />
	
</form>



</body>

</html>

<?php 

@$fortsett=$_POST ["fortsett"];
if ($fortsett) 
{
				$tall=$_POST ["tall"];
				
				if ($tall == 9) {
				print("Det var korrekt svar :)");
				} 

				else {
					print("Det var feil! 3 ganger 3 er ikke $tall. <br> Korrekt svar er 9.");
						}
	
}
?>
