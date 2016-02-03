
# Tema 13: Radioknapper og endring



# Statiske  (statiske knapper)
<form--->
Ukedag 	<input type="radio" id="ukedag" name="ukedag" />mandag<br />
		<input type="radio" id="ukedag" name="ukedag" />mandag<br />
</form>

<?php

$ukedag=$_POST["ukedag"];
print ("Valgt ukedag: $ukedag");
?>



<form>
	Poststed <?php include("radioknapper-postnr.php"); ?>
</form>

<?php

$postnr =$_POST["postnr"];
print("Valgte postnr er $postnr");
?>



# radiokanper-postnr.php

<?php

include("db-tilkobling.php");
$sqlSetning="SELECT * FROM poststed ORDER BY postnr;";
$sqlRestultat=mysqli_query($db,$sqlSetning) or die("ikke mulig å hente fra DB");

$andtallRader=mysqli_num_rows("$sqlRestultat");

for ($r=1; $r <= $andtallRader ; $r++) { 
	$rad=mysqli_fetch_array($sqlRestultat);
	$postnr=$rad["postnr"];
	$poststed=$rad["poststed"];
	print("<input type='radio' id='postnr' name='postnr' value='$postnr'/>$postnr $poststed <br /");
}


?>


# Endre 

postnr <select name="postnr">

#php

<?php
@$finnPoststedKnapp=$_POST["finnPoststedKnapp"];

if ($finnPoststedKnapp)

{
	$postnr=$_POST["postnr"];
	$sqlSetning="SELECT * FROM poststed WHERE postnr='$postnr';";
	$sqlRestultat=mysqli_query($db,$sqlSetning) or die("ikke mulig å hente fra DB");
	$rad=mysqli_fetch_array($sqlRestultat);
	$poststed=$rad["Poststed"];


print("<form method ='post' ................>");
print("Postnr<input type='text' value='$postnr' readonly /><br />");
print("<input type='submit' value='Endre poststed' name='EndrePoststedKnapp'>");
print("</form>");

}

@$EndrePoststedKnapp=$_POST["EndrePoststedKnapp"];
if ($EndrePoststedKnapp) {

	$postnr=$_POST["postnr"];
	$poststed=$_POST["poststed"];

	if (!$postnr || !$poststed) {
		print("Begge belt må fylles ut");
	}

	else {
		$sqlSetning="UPDATE poststed SET poststed='$poststed' WHERE postnr='$postnr'";
		mysqli_query($db,$sqlSetning) or die("ikke mulig å hente fra DB");
		print("Poststed endret");
	}
}
?>
<?php
#listboks land (FK)

$rad=mysqli_fetch_array($sqlRestultat);
$poststed=$rad["poststed"];
$land=$rad["land"];

print(arg);
print(arg);


print("Land <select name='land' id='land'>");
print ("<option value='$land'>$land</select>option>");
include("listeboks-land.php");
print("</select>")
print("<input type='submit'....>");


?>