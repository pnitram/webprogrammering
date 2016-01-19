function fokus(element) {
    element.style.background = "yellow";
}

function mistetFokus(element) {
	element.style.background ="white";
}

function musOverRK(element) {
	document.getElementById("melding").style.color="black";
	if (element == document.getElementById('klassekode')){
		document.getElementById("melding").innerHTML="Klassekode skal bestå av 3 tegn(2 store bokstaver og 1 siffer).";
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
		document.getElementById("melding").innerHTML="Klassekode skal bestå av 3 tegn(2 store bokstaver og 1 siffer).";
	}
}

function musOverKL(element) {
	document.getElementById("melding").style.color="black";
	if (element == document.getElementById('search')){
		document.getElementById("melding").innerHTML="Klassekode skal bestå av 3 tegn(2 store bokstaver og 1 siffer).";
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

function finn(sokeord)
{
  var finn=new XMLHttpRequest();
  
  finn.onreadystatechange=function() 
    {
      if (finn.readyState==4 && finn.status==200)
        {
          document.getElementById("melding").innerHTML=finn.responseText;
        }
    }

  finn.open("GET","search.php?sokeord="+sokeord);
  finn.send();
}