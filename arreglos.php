<?php 
//un arreglo es un tipo de dato que puede contener n datos
// apartir de un almacenamiento por indice

$arreglo= array( ); 
$arreglo[0]="Luis Daniel";
$arreglo[1]=1;
$arreglo[2]="php";
$arreglo[3]="MVC";

//llenar el arreglo desde el inicio o por posicion;

$arreglo2 = array('daniel',1,2,3,4,5)


for ($i=0; $i < count($arreglo) ; $i++) { 
	echo $arreglo[$i];
	echo "<br>";
}

 ?>