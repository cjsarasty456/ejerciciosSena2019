<?php
$opc=$_GET['Operacion'];
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$resul=0;
if($opc=='Sumar'){
    $resul=$num1+$num2;
}else if($opc=='Restar'){
    $resul=$num1-$num2;
}
echo $resul;
?>