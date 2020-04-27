<?php
  $parcial1= $_POST['parcial1'];
  $parcial2= $_POST['parcial2'];
  $parcial3= $_POST['parcial3'];
  $examen= $_POST['examen'];
  $trabajo= $_POST['trabajo'];

  $a=($parcial1+$parcial2+$parcial3)/3;
  $b=$a*0.35;
  $c=$examen*0.35;
  $d=$trabajo*0.30;
  $e= $b + $c + $d;

  echo "parciales: ".$b." <br> "."Examen: ".$c. " <br> "."Trabajo: ".$d." <br> ";

  if ($e>3) {
    echo "Estas aprobado";
  }
  else{
    echo "No aprovado";
  }
 ?>
