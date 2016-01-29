<!DOCTYPE html>
<html>
<head>
	<title>OBLIGATORISK OPPGAVE 2 - PHP</title>
	<meta charset="utf-8">
	<style>
		ul {  list-style-type: circle;}
		div {border: 0px solid black;padding: 5px}
		#d1 {float: left;}
		#d2 {float: left;}
		#d3 {float: left;}
		#d4 {float: left;}
		#d5 {float: left; clear: right}
    </style>

</head>

<body>

<h1>Obligatorisk oppgave 2</h1>
<h2>Student: Martin Pedersen</h2>
<h3>Brukerfunksjoner</h3>

	<div id="d1"> <?php include './registrere-klasse.php'?> </div>
	<div id="d2"> <?php include './vis-klasse.php'?> </div>
	<div id="d3"> <?php include './registrere-student.php'?> </div>
	<div id="d4"> <?php include './vis-student.php'?> </div>
	<div id="d5"> <?php include './vis-klasseliste.php'?> </div>
	

<h3>Tekstfiler</h3>
<ul>
<li><a href="./temp/klasse.txt";>Klasse.txt</a></li>
<li><a href="./temp/student.txt">Student.txt</a></li>
</ul>

</body>
</html>