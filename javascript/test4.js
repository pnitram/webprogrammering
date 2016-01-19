// Dialogboks

alert("Hei Helge!! Klar for quiz?");
var svar = prompt ("Hva er 3 ganger 3?");
if (confirm("Er du sikker om du har svar korrekt??"))
{
	if (svar == 9) {
		document.write("det var korrekt svar")
	}
	else {
		document.write("desverre det var feil")
	}

}
else
{
	document.write("Velkommen tilbake");
}