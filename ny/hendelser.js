function fokus(element) {
    element.style.background = "yellow";
}

function mistetFokus(element) {
	element.style.background ="white";
}

function musOver(element) {
	document.getElementById("melding").style.color="black";
	if (element == document.getElementById('fagkode')){
		document.getElementById("melding").innerHTML="Fagkode skal bestå av 7 tegn(3 store bokstaver og 4 siffre)";
	}
	if (element == document.getElementById('fagnavn')){
		document.getElementById("melding").innerHTML="Fagnavn må fylles ut";
	}
	if (element == document.getElementById('faglarer')){
		document.getElementById("melding").innerHTML="Faglærer må fylles ut";
	}
}

function musUt(element){
	document.getElementById("melding").innerHTML="";
}

function tilStore(element){
	element.value=element.value.toUpperCase();
}

