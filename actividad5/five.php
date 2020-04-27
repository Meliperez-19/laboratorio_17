<?php
$articulo= $_POST['articulo'];
$clave= $_POST['clave'];
$precio= $_POST['precio'];

$j=$precio*0.10;
$k=$precio*0.20;

if ($clave==1){
  echo "Tu descuento es:".($precio-$j);
}
if ($clave==2){
  echo "Tu descuento es:".($precio-$k);
}
else{
  echo "Precio sin descuento:".$precio;
}

 ?>
