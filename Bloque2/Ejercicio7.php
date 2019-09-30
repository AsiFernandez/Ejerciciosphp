<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>
	<?php 

	$iBase = rand(1, 10);
	$iPotencia ;

	function calcularPotencias ($base, $potencia = 2){

		$resultado = pow($base, $potencia);
		return $resultado;
	}

	if (!is_null($iPotencia)) {
		echo "El resultado de " . $iBase . " elevado a " . $iPotencia . " es igual a: " . calcularPotencias($iBase, $iPotencia );
	}else{
		echo "El resultado de " . $iBase . " elevado a 2 " . $iPotencia . " es igual a: " . calcularPotencias($iBase );

	}
	
	?>
</body>
</html>