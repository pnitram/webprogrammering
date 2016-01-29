

<!DOCTYPE html>
<html>
<head>
	<title>VIS STUDENT.TXT</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<!-- INKLUDERER HOVEDMENY -->
<div class="leftside">
<?php include "./meny.php"; ?>
</div>
<!-- VIS STUDENT.TXT -->
<main>
<div class="rightside">
<div class="box">
<h2>Vis registrert data i student.txt</h2>
<div class="container">
<form method="post" action="" id="vis-student" name="vis-student"/>
<input type="submit" value="Vis student.txt" id="fortsett" name="fortsett"/> <br />
</form>
</div>
</div>
<?php

@$fortsett=$_POST["fortsett"];

if ($fortsett) {
    //$filnavn=("./temp/student.txt");
    $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/student.txt";
$filoperasjon="r";                      
$fil=fopen($filnavn, $filoperasjon);    

while ($linje=fgets($fil)) {            
    print("$linje<br>");                
}
fclose($fil);       
}


?>
<!-- SLUTT PÅ PHP -->

<!-- JAVASCRIPT MELDING  -->
<div id="melding"></div>
</div>


</main>
</body>
</html>



