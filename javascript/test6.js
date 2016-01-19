//validering av klassekode

var klassekode=prompt("klassekode");
var tegn1,tegn2,tegn3;
var lovligklassekode=true;
if (!klassekode)
{
	lovligklassekode=false;
	document.write("klassekode ike fyllt ut");
}
else if (klassekode.length!=3)
{
	lovligklassekode=false
	document.write("klassekode er ikke tre tegn");
}
else
{
	tegn1=klassekode.substr(0,1);
	tegn2=klassekode.substr(1,1);
	tegn3=klassekode.substr(2,1);

	if (tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "1" || tegn3 > "9") 
		{
			lovligklassekode=false;
			document.write("Mins 1 tegn er ulovlig");
		}
}
if (lovligklassekode)
{
	document.write("klassekode er korrekt fyllt ut");
}