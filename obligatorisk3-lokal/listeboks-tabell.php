<?php

include("./db-tilkobling.php");

$sqlSetning="SHOW TABLES;";
$tabellListe= array();
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Ikke mulig å hente fra $database: " .mysqli_error() );

$antallRader=mysqli_num_rows($sqlResultat);

while($tabell = mysqli_fetch_array($sqlResultat))
  {
    $tabllListe[] = $tabell[0];
    print("<option value='$tabell'>$tabell</option>");
  }

?>