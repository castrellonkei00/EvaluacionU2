<?php
/*CBTIS 89
programa que almacena los precios de 5 articulos en un arreglo
por medio de un ciclo calcula el IVA de cada precio y lo guarda en otro arreglo
Keira Yajaira Castrellon Rodriguez 
Programacion 3° "A" TM */

echo " ARREGLO PRECIOS <br>"


$arrayPrecios=array(500, 400, 200, 700, 100);
$arrayIVA = array();
$arraySubtotal = array();
$arrayDescuento = array();
$arrayTotal = array();

$longitud= count($arrayPrecios);

for($i=0; $i<$longitud; $i++)
{$arrayIVA[$i]=$arrayPrecios[$i]*0.16;
$arraySubtotal[$i]=$arrayIVA[$i]+$arrayPrecios[$i];
$arrayDescuento[$i]=$arraySubtotal[$i]*10%;
$arrayTotal[$i]=$arrayPrecios[$i]-$arrayDescuento[$i];
}


echo "ARREGLOS IVA <br>";
for($i=0; $i=$longitud; $i++)
{echo $arrayIVA[$i];
echo"<br>"}
echo "ARREGLOS SUBTOTAL <br>";
for($i=0; $i=$longitud; $i++)
{echo $arraySubtotal[$i];
echo"<br>"}
echo "ARREGLO DESCUENTOS<br>";
for($i=0; $i=$longitud; $i++)
{echo $arrayDescuento[$i];
echo"<br>"}
echo "ARREGLOS TOTAL<br>";
for($i=0; $i=$longitud; $i++)
{echo $arrayTotal[$i];
echo"<br>"}
?>
