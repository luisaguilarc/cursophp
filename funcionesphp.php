<?php 
 //fincion normal de php
function mifuncion(){
return 'este es un nombre ';


}

//funcion escalare 
//es una funcion que recibe parametros

function mifuncion2($valorA,$valorB,$opcion){
switch ($opcion) {
	case 'suma':
		echo $valorA + $valorB;
		break;
		case 'resta':
			echo $valorA - $valorB;
			break;
			case 'multiplicacion':
				echo $valorA * $valorB;
				break;
				case 'division':
					echo $valorA / $valorB;
					break;
	
	default:
		# code...
		break;
}
}
 echo mifuncion2(5,10,'multiplicacion');

 //ahver una funcion y llamarla de esta manera funcion escalare

 ?>