function focus(element)
{
	element.style.backround="yellow";
}

function mistetFocus(element)
{
	element.style.backround="white";
}

function musInn(element)
{
	if (element == document.getElementById("postnr")) {
		document.getElementById("melding").innerHTML="Postnummer må bestå av 4 tegn";
	};

	if (element == document.getElementById("poststed")) {
		document.getElementById("melding").innerHTML="poststed må fylles ut"
	};
}

function musUt()
{
	document.getElementById("meldig").innerHTML="";
}
function settFokus(element)
{
	element.focus();
}

function endreTilStoreBokstaver(element)
{
	element.value=element.value.toUpperCase();
}





