function fjernMelding()
{
	document.getElementById('')
}
function vis(tekst)
{
	var foresporsel = new XMLHttpRequest(); /*oppretter request objekt */
	foresporsel.onreadystatechange = function()
	{
	if (foresporsel.readyState==4 && foresporsel.status==200)  /* responsen er fullført og vellykket */
	{
		document.getElementById("melding").innerHTML=foresporsel.responseText;  /* responsteksten legges i meldingsfeltet */
	}
}
foresporsel.open("GET","1-ajax-sok.php?tekst="+tekst);  /* angir metode og URL */
foresporsel.send();  /* sender en request */
}