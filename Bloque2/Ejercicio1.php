<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>
	
	 
<?php
		$numNaturales = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
		$factorial=[];
			function factorial($n){
		    	if ($n <= 1) {
		        	return 1;
		        	
		    	}
		 
		    	return $n * factorial($n - 1);
			}
		foreach ($numNaturales as $numero){
			$factorial[$numero] = factorial($numero);
			echo $numero." el factorial es: ".$factorial[$numero]."</br>";
		}
		
?>

</body>
</html>