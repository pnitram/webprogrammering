function fokus(element) {
    element.style.background = "yellow";
}

function mistetFokus(element) {
	element.style.background ="white";
}

function musOverRK(element) {
	document.getElementById("melding").style.color="black";
	if (element == document.getElementById('klassekode')){
		document.getElementById("melding").innerHTML="Kun STORE BOKSTAVER og siste tegn ett siffer.";
	}
	if (element == document.getElementById('klassenavn')){
		document.getElementById("melding").innerHTML="Klassenavn må fylles ut.";
	}
}

function musOverRS(element) {
	document.getElementById("melding").style.color="black";
	if (element == document.getElementById('brukernavn')){
		document.getElementById("melding").innerHTML="Brukernavn må fylles ut.";
	}
	if (element == document.getElementById('fornavn')){
		document.getElementById("melding").innerHTML="Fornavn må fylles ut.";
	}
	if (element == document.getElementById('etternavn')){
		document.getElementById("melding").innerHTML="Etternavn må fylles ut.";
	}
		if (element == document.getElementById('klassekode')){
		document.getElementById("melding").innerHTML="Kun STORE BOKSTAVER og siste tegn ett siffer.";
	}
}

function musOverKL(element) {
	document.getElementById("melding").style.color="black";
	if (element == document.getElementById('search')){
		document.getElementById("melding").innerHTML="Kun STORE BOKSTAVER og siste tegn ett siffer.";
	}
}

function musUt(element){
	document.getElementById("melding").innerHTML="";
}

function tilStore(element){
	element.value=element.value.toUpperCase();
}

function fjernMelding()
{
  document.getElementById("melding").innerHTML="";   
}