  
<?php
  $sokeord=$_GET ["sokeord"];
   
  print ("<table border=0>");
  //$filnavn=("./temp/student.txt");
  $filnavn="D:\\Sites\\home.hbv.no\\phptemp\\882555/student.txt";
  $filoperasjon="r";            
  $fil=fopen($filnavn, $filoperasjon);

  while ($linje = fgets ($fil))
    {
      if ($linje != "")
        {
          $del = explode (";" , $linje);
          $brukernavn=trim($del[0]);
          $fornavn=trim($del[1]);
          $etternavn=trim($del[2]);
          $klassekode=trim($del[3]);

          $startpos1=stripos($klassekode,$sokeord);

          if ($startpos1!==false)
            {
               print ("<tr> <td> $brukernavn $fornavn $etternavn $klassekode </td> </tr>");
            }
        }
    }

  fclose ($fil);

  print ("</table>"); 

?>