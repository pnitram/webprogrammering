<!DOCTYPE html>
<html>
<head>
	<title>5-4></title>
</head>
<body>

<form method="post" action="" id="oppgave-2-4" name="oppgave-2-4"/>
	Hva er 3x3? <input type="text" id="svar" name="svar" required/> <br />
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett"/> <br />
		<input type="reset" value="Nullstill" id="nullstill" name="nullstill"/>
</form>



<?php
@$fortsett=$_POST ["fortsett"];
    if ($fortsett)    /* Fortsett-knappen er trykket  */
        {
            $svar=$_POST ["svar"];    /* variable gitt verdier fra feltene i HTML-skjemaet */
	
            if ($svar == 9)    /* avgitt svar er riktig */
                {
                    print("Riktig. 3 ganger 3 er 9 <br/>");
                }
            else    /* avgitt svar er feil */
                {
                    print("Feil. 3 ganger 3 er ikke  $svar. 3 ganger 3 er 9 <br/>");
                }
        }





?>

</body>
</html>