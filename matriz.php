<?php

$operac = $_POST["operaciones"];
$operacion = (string)$operac;


//Variables matriz A:

$numero1A = $_POST["A1"];
$A1 = (int)$numero1A;

$numero2A = $_POST["A2"];
$A2 = (int)$numero2A;

$numero3A = $_POST["A3"];
$A3 = (int)$numero3A;

$numero4A = $_POST["A4"];
$A4 = (int)$numero4A;

$numero5A = $_POST["A5"];
$A5 = (int)$numero5A;

$numero6A = $_POST["A6"];
$A6 = (int)$numero6A;

$numero7A = $_POST["A7"];
$A7 = (int)$numero7A;

$numero8A = $_POST["A8"];
$A8= (int)$numero8A;

$numero9A = $_POST["A9"];
$A9 = (int)$numero9A;

$numero = $_POST["nro"];
$nro = (int)$numero;


switch ($operacion) {

	case "Determinante":
	determinanteMatrizA($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9);
		  echo "<br><br><a href='matriz.html'>atras</a>";
		break;
	case "MatrizInversa":
	matrizInversa($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9,$det);
		  echo "<br><br><a href='matriz.html'>atras</a>";
		break;
    case "MatrizTranspuesta":
	transpuestaMatrizA($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9);
		  echo "<br><br><a href='matriz.html'>atras</a>";
		break;
		case "Multiplicar":
	multiplicar($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9, $nro);
		  echo "<br><br><a href='matriz.html'>atras</a>";
		break;
}

//Determinante de la matriz:

function determinanteMatrizA($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9) {
	$detA = $A1 * $A5 * $A9;
	$detB = $A4 * $A8 * $A3;
	$detC = $A7 * $A2 * $A6;

	$detD = $A3 * $A5 * $A7;
	$detE = $A6 * $A8 * $A1;
	$detF = $A9 * $A2 * $A4;

	$det1 = $detA + $detB + $detC;
	$det2 = $detD + $detE + $detF;

	$detTotal = $det1 - $det2;

    echo "La Determinante de la matriz A : <br><br>"; 
    echo "(".$A1.")"."(".$A2.")"."(".$A3.")"."<br>"."(".$A4.")"."(".$A5.")"."(".$A6.")"."<br>"."(".$A7.")"."(".$A8.")"."(".$A9.")<br>";
    echo "es =".$detTotal;
	
}


 //Transpuesta matriz A:

function transpuestaMatrizA($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9) {
echo "Matriz A <br>";
echo "(".$A1.")"."(".$A2.")"."(".$A3.")"."<br>"."(".$A4.")"."(".$A5.")"."(".$A6.")"."<br>"."(".$A7.")"."(".$A8.")"."(".$A9.")<br>";
echo "La transpuesta de la matriz A es: <br><br>"."(".$A1.")"."(".$A4.")"."(".$A7.")"."<br>"."(".$A2.")"."(".$A5.")"."(".$A8.")"."<br>"."(".$A3.")"."(".$A6.")"."(".$A9.")";

}

//Multiplicacion de la matriz A por n:
function multiplicar($A1, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9, $nro) {
	$mul1 = $A1 * $nro;
	$mul2 = $A2 * $nro;
	$mul3 = $A3 * $nro;
	$mul4 = $A4 * $nro;
	$mul5 = $A5 * $nro;
	$mul6 = $A6 * $nro;
	$mul7 = $A7 * $nro;
	$mul8 = $A8 * $nro;
	$mul9 = $A9 * $nro;

echo "La multiplicacion de la matriz A por ".$nro." es: <br><br>"."(".$mul1.")"."(".$mul2.")"."(".$mul3.")"."<br>"."(".$mul4.")"."(".$mul5.")"."(".$mul6.")"."<br>"."(".$mul7.")"."(".$mul8.")"."(".$mul9.")";
}


?>
