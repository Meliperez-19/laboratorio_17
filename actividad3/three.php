<?php
$paciente= $_POST['paciente'];
$peso= $_POST['peso'];
$estatura= $_POST['estatura'];

$IMC= ($peso / ($estatura*$estatura))*10000;
if($IMC < 18.5){
  echo "Está por debajo del peso";
}
if (($IMC >= 18.5) and ($IMC <= 24.9)){
  echo "Usted está saludable";
}
if (($IMC >= 25.0) and ($IMC <= 29.9)) {
  echo "Usted tiene sobre peso";
}
if (($IMC >= 30.0) and ($IMC <= 39.9)) {
  echo "obeso";
}if($IMC > 40){
  echo "Se encuentra en obesidad mórbida";
}

 ?>
