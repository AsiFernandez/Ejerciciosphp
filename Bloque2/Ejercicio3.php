<!DOCTYPE html>
<html>
<head>
	<title> Ejercicio 3 </title>
</head>
<body>
	<?php 
	
	$array = [];
	

	for ($i=0; $i <= 20 ; $i++) { 
		$array[$i] = rand(1, 20 );
	}

	
	sort($array);

	print_r($array) ;
	echo "</br></br>El numero mas pequeño de los que tenenmos en el array es: <h4 style='color:blue'>".$array[0]."</h4>";
	echo "</br></br>El numero mas grande de los que tenenmos en el array es: <h4 style='color:blue'>".end($array)."</h4>";
	echo "</br></br>La suma de los numero del array es: <h4 style='color:blue'>".array_sum($array)."</h4></br>Y la media es de:<h4 style='color:blue'>" . round(array_sum($array)/count($array), 2) . "</h4>"; 

	
	?>
</body>
</html>