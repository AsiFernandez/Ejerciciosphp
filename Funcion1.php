<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$num1 = 5;
	$num2 = 5;
	$operacion = "suma";
	
	function suma($param1, $param2){

		$resultado = $param1 + $param2;
		return $resultado;
	}

	function resta($param1, $param2){

		$resultado = $param1 - $param2;
		return $resultado;
	}

	function calcularOperacion ($param1, $param2, $operacion){

		$resultado = $operacion($param1, $param2);
		echo "El resultado de la operacion es: ".$resultado;
	}

	calcularOperacion($num1, $num2, $operacion);
?>
</body>
</html>