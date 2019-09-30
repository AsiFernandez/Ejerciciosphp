<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
<?php
	
	$frase = "perro gato conejo raton cabra";
	$palabras = [];
	$aAsociativo = explode(" ", $frase);

	for ($i=0; $i <= count($palabras); $i++) { 
		$palabras[$aAsociativo[$i]] = strlen($aAsociativo[$i] );
	}

	print_r($palabras);
?>
</body>
</html>