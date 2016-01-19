


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

function validerKlassekode(klassekode)
{

}

function validerRegistrerStudentdata()
{
	var postnr=document.getElementById("postnr").value;
	var klassekode=document.getElementById("klassekode").value;
}