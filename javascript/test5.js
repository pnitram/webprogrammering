//Validering av postnummer

var postnr = prompt("postnr");
var lovligPostnr = true;
if (!postnr) {
	lovligPostnr=false;
	document.write("postnr er ikke fyllt ut");
	}
	else if (postnr.length !=4) {
	lovligPostnr=false;
	document.write("postnr er ikkke fire tegn");
	}
	else if (isNaN(postnr)) {
	lovligPostnr=false;
	document.write("postnr består ikke av siffre");
	}
	if (lovligPostnr)
	{
		document.write("postnummer er fyllt ut");
	}
