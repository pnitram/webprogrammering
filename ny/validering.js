


function fjernMelding()
{
	document.getElementById("melding").innerHTML="";
}
function validerPostnr(postnr)
{
	var lovligPostnr=validerPostnr(postnr);
	var lovligKlassekode=validerKlassekode(klassekode);
	var feilmelding="";
	if(!lovligPostnr)
	{
		feilmelding="Postnummer er ikke koreekt fyllt ut <br />";
	}
	if (!lovligKlassekode) 
	{
		feilmelding="Klassekode er ikke lorrekt fyllt ut <br />";
	}
	if (lovligPostnr && lovligKlassekode) 
	{
		return true;
	}
else
	{
		document.getElementById("melding").style.color="red";
		document,getElementById("melding").innerHTML=feilmelding;
		return false;
	}
}

function validerKlassekode(klassekode) {

}

function validerRegistrerStudentdata()
{
	var postnr=document.getElementById("postnr").value;
	var klassekode=document.getElementById("klassekode").value;
}

function validerFagkode(fagkode) {
	var teller;
	var tegn = new Array(7);
	var lovligFagkode = true;

	if (!fagkode) {
		lovligFagkode = false;
	}
	else if (fagkode.length!=7) {
		lovligFagkode = false;
	}
	else {
		for (teller=1;teller<=7;teller++) {
			tegn[teller]=fagkode.substr(teller-1,1)
		}
	if (tegn[1] < "A" || tegn[1] > "Z" || tegn[2] < "A" || tegn[2] > "Z" || tegn[3] < "A" || tegn[3] > "Z") {
		lovligFagkode = false;
	}
	else if (tegn[4] < "0" || tegn[4] > "9" || tegn[5] < "0" || tegn[5] > "9" || tegn[6] < "0" || tegn[6] > "9" || tegn[7] < "0" || tegn[7] > "9") {
		lovligFagkode = false;
	}
	}
		return lovligFagkode;
}

function validerRegistrerFag()
{
  var fagkode=document.getElementById("fagkode").value;
  var fagnavn=document.getElementById("fagnavn").value;
  var faglarer=document.getElementById("faglarer").value;
  
  var lovligFagkode=validerFagkode(fagkode);

  var feilmelding="";

  if (!lovligFagkode)
    {
        feilmelding="Fagkode er ikke korrekt fylt ut <br />";
    }
  if (!fagnavn)
    {
        feilmelding=feilmelding + "Fagnavn er ikke fylt ut <br />";
    }
  if (!faglarer)  
    {
        feilmelding=feilmelding + "Faglærer er ikke fylt ut <br />";
    }

  if (lovligFagkode && fagnavn && faglarer)
    {
        return true;
    }
  else
    {
        document.getElementById("melding").style.color="red";	
        document.getElementById("melding").innerHTML=feilmelding;	
        return false;
    }	
} 
