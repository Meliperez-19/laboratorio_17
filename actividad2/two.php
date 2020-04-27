<?php
$vendedor= $_POST['vendedor'];
$automoviles= $_POST['automoviles'];
$precio= $_POST['precio'];

$p=50000*$automoviles;
$t=0.05*$precio;
$f=450000+$p+$t;

echo "salario total: ".$f;



 ?>
