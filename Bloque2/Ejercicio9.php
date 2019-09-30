<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 9</title>
</head>
<body>
	<?php
		
		$arrayNumeros =[];
		for ($i=0; $i < 4 ; $i++) { 
			$arrayNumeros[$i]  = rand(0, 100);
		}
		
		$aleatorio = rand(-100, -1);
		array_push($arrayNumeros, $aleatorio);
		
		
		function aCuadrado ($lado){
			try {

				if($lado > 0)
					return "El area del cuadrado sabiendo que un lado mide: ".$lado. " es ". ($lado * $lado);
				else
					throw new Exception ("Los lados que son negativos como: ". $lado[4]. " no se puede calcular");


			} catch (Error $exception) {
				echo $exception->getMessage();
			}
		}

		foreach ($arrayNumeros as $valor) {
			echo aCuadrado($valor)."<br>";
		}


	?>
</body>
</html>