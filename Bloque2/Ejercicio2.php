<!DOCTYPE html>
<html>
<head>
	<title>Funcion 1</title>
</head>
<body>
	
	 
<?php

	$filas = rand(1, 10);
	$columnas = rand(1, 10)	;

	function crearTabla ($param1, $param2){
		
		for ($i=0; $i <= $param1; $i++) { 
		echo  "<tr style='border:1px solid;' > $i";
		for ($j= 0; $j <= $param2 ; $j++) { 
			echo  "<td style='border:1px solid;' > $j </td>";
		}
		echo  "</tr></br>";
		}
		
	}

	print_r(crearTabla($filas, $columnas));



?>

</body>
</html>