<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	
	 
<?php

	$filas = 3;
	$columnas = 5	;

	function crearTabla ($param1, $param2){
		
		for ($i=1; $i <= $param1; $i++) { 
		echo  "<tr style='border:1px solid;' > $i";
		for ($j=1; $j <= $param2 ; $j++) { 
			echo  "<td style='border:1px solid;' > $j </td>";
		}
		echo  "</tr></br>";
		}
		
	}

	print_r(crearTabla($filas, $columnas));



?>

</body>
</html>