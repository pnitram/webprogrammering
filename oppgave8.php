



<!DOCTYPE html>
<html>
<head>
    <title>Oppgave 8</title>
</head>
<body>
    <h3>Oppgave 8</h3>

    <form method="post" action="" id="oppgave8" name="oppgave8">
        Hva er 3 ganger 3 ? <input type="text" id="svar" name="svar" required /> <br />
        <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
        <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
   </form>
</body>
</html>

<?php     /* Oppgave 8 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
/*    Programmet sjekker om svaret er riktig og skriver ut en melding hvis svaret er riktig og en annen melding hvis svaret er feil
/*    Meldingen skrives ut på samme side som HTML-skjemaet er
*/
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