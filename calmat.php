<?php

$operac = $_POST["operaciones"];
$operacion = (string)$operac;

//Variables matriz A:

$numero1 = $_POST["A1"];
$A1 = (int)$numero1;

$numero2 = $_POST["A2"];
$A2 = (int)$numero2;

$numero3 = $_POST["A3"];
$A3 = (int)$numero3;

$numero4 = $_POST["A4"];
$A4 = (int)$numero4;

$numero5 = $_POST["A5"];
$A5 = (int)$numero5;

$numero6 = $_POST["A6"];
$A6 = (int)$numero6;

$numero7 = $_POST["A7"];
$A7 = (int)$numero7;

$numero8 = $_POST["A8"];
$A8 = (int)$numero8;

$numero9 = $_POST["A9"];
$A9 = (int)$numero9;

//Variables matriz B:

$numero1B = $_POST["b1"];
$b1 = (int)$numero1B;

$numero2B = $_POST["b2"];
$b2 = (int)$numero2B;

$numero3B = $_POST["b3"];
$b3 = (int)$numero3B;

$numero4B = $_POST["b4"];
$b4 = (int)$numero4B;

$numero5B = $_POST["b5"];
$b5 = (int)$numero5B;

$numero6B = $_POST["b6"];
$b6 = (int)$numero6B;

$numero7B = $_POST["b7"];
$b7 = (int)$numero7B;

$numero8B = $_POST["b8"];
$b8 = (int)$numero8B;

$numero9B = $_POST["b9"];
$b9 = (int)$numero9B;

$numeroA = $_POST["Numer"];
$Numer = (int)$numeroA;


//Llamado a todas las funciones Switch


switch ($operacion) {
		case "SumarMatrices":
	sumaMatricesAB($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9,  $b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9);
		 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  echo "<br><br><a href='$url'>atras</a>";
	break;

      case "RestarMatrices":
	    restaMatricesAB($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9,  $b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9);
		 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  echo "<br><br><a href='$url'>atras</a>";
		break;

	case "MultiplicarMatrices":
	     multiplicacionMatricesAB($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9,  $b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9);
		 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  echo "<br><br><a href='$url'>atras</a>";
		break;
	default:
	echo "El valor seleccionado no es valido";
		 $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  echo "<br><br><a href='$url'>atras</a>";
		break;
	}

//sumar matrices:***********************************************************************************
function sumaMatricesAB($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9,  $b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9) {

	$suma1 = $A1 + $b1;
	$suma2 = $A2 + $b2;
	$suma3 = $A3 + $b3;
	$suma4 = $A4 + $b4;
	$suma5 = $A5 + $b5;
	$suma6 = $A6 + $b6;
	$suma7 = $A7 + $b7;
	$suma8 = $A8 + $b8;
	$suma9 = $A9 + $b9;

echo "El resultado de la suma de la matriz A y la matriz B es:<br><br>"."(".$suma1.")(".$suma2.")"."(".$suma3.")"."<br>"."(".$suma4.")"."(".$suma5.")"."(".$suma6.")"."<br>"."(".$suma7.")"."(".$suma8.")"."(".$suma9.")";
//Restar matrices:*******************************************************************************
}

function restaMatricesAB($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9,  $b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9) {

	$resta1 = $A1 - $b1;
	$resta2 = $A2 - $b2;
	$resta3 = $A3 - $b3;
	$resta4 = $A4 - $b4;
	$resta5 = $A5 - $b5;
	$resta6 = $A6 - $b6;
	$resta7 = $A7 - $b7;
	$resta8 = $A8 - $b8;
	$resta9 = $A9 - $b9;


echo "El resultado de la resta de la matriz A y la matriz B es:<br><br>"."(".$resta1.")"."(".$resta2.")"."(".$resta3.")"."<br>"."(".$resta4.")"."(".$resta5.")"."(".$resta6.")"."<br>"."(".$resta7.")"."(".$resta8.")"."(".$resta9.")";
	}

//Multiplicar matrices:**************************************************************************

function multiplicacionMatricesAB($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9,  $b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9) {

	$mult1 = (($A1 * $b1) + ($A2 * $b4) + ($A3 * $b7));
	$mult2 = (($A1 * $b2) + ($A2 * $b5) + ($A3 * $b8));
	$mult3 = (($A1 * $b3) + ($A2 * $b6) + ($A3 * $b9));

	$mult4 = (($A4 * $b1) + ($A5 * $b4) + ($A6 * $b7));
	$mult5 = (($A4 * $b2) + ($A5 * $b5) + ($A6 * $b8));
	$mult6 = (($A4 * $b3) + ($A5 * $b6) + ($A6 * $b9));

	$mult7 = (($A7 * $b1) + ($A8 * $b4) + ($A9 * $b7));
	$mult8 = (($A7 * $b2) + ($A8 * $b5) + ($A9 * $b8));
	$mult9 = (($A7 * $b3) + ($A8 * $b6) + ($A9 * $b9));

echo "El resultado de la multiplicacion de la matriz A y la matriz B es:<br><br>"."(".$mult1.")"."(".$mult2.")"."(".$mult3.")"."<br>"."(".$mult4.")"."(".$mult5.")"."(".$mult6.")"."<br>"."(".$mult7.")"."(".$mult8.")"."(".$mult9.")";

}

?>