<?php
$opc=$_GET["operacion"];
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$resul=0;
if($opc=="sumar"){
$resul=$num1+$num2;
}
if($opc=="restar"){
$resul=$num1-$num2;}
if($opc=="multiplicacion"){
$resul=$num1*$num2;}
if($opc=="division"){
$resul=$num1/$num2;}
echo $resul;
$resul=$num1/0;}
$resul=$num2==0;}echo"no se puede lograr esta operacion";
?>