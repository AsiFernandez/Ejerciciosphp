<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
<?php
	
	$frase = "perro gato conejo raton cabra";
	$palabras = explode(" ", $frase);

	for ($i=0; $i < count($palabras); $i++) { 
		echo  " " . $palabras[$i]. "=>" . strlen($palabras[$i] );
	}
	
?>
</body>
</html>