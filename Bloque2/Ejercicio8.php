<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 8</title>
</head>
<body>
	<?php  

		function existeIndex (){
			try{
				if(!file_exists('index.php')) {
					throw new exception("no existe el fichero index.php en la carpeta actual");
				}else{
					echo "El fichero index.php existe.";
				}	
			}catch (Error $exception){
				echo $exception -> getMessage();
			}
		}

		existeIndex();
	?>
</body>
</html>