<?php 
// OL sirven para validar expresiones tal el caso 
//del operador or que sirve para validar una sentencia u otra
//en el caso del operador and que sirve para validar ambas sentencias

//and sirve para se rangos 
$edadvalidad=18;

if($edadvalidad >=18 and $edadvalidad<= 26){
	//echo "edad valida"; 

}

//
//or validar control de formularios
$sexo="M";

if ($sexo=='M' or $sexo=='F' ) {
	 //echo"sexo valido";
}



//
//operadores de diferente y la negacion.
//operasor diferente sirve para validar que un dato no corresponda a la unidad o caracter

// la negacion sirve para hacer una validacion de algo que no ocurre
$dato=5;

if ($dato != 10 ) {
	//echo "es un dato bueno";
}

$dato2=false;

if(!$dato2){
	echo "no es verdadero";

}




 ?>