<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
	<?php  

	$nombreN = "Julen";
	$mesN = "Noviembre";
	$cumpleaños = ["Enero" =>["Ane", "Carlos","Arturo" ], 
	"Febrero" =>["Juncal", "Juan"], 
	"Marzo" =>["Aritz", "Eduardo"], 
	"Abril" =>["Maisie", "Emma"], 
	"Mayo" =>["Dwayne Jhonson", "Chris Brown", "Mark Zuckerberg"], 
	"Junio" =>["Irene"], 
	"Julio" =>["Asier", "Ruben"], 
	"Agosto" =>["JoseLuis", "Pedro"], 
	"Septiembre" =>["Asier", "Adrian", "Ibai"], 
	"Octubre" =>["Arantxa", "Iñigo"], 
	"Noviembre" =>["MariaEugenia","Iñako"], 
	"Diciembre" =>["Aimar", "Adrian"]];

	//añadir un nombre al array creado manualmente
	function añadirPersonas ($nombre, $mes, &$cumpleaños){
	 	array_push($cumpleaños[$mes], $nombre);

	 	
	 	return sizeof($cumpleaños[$mes]);
	 }
	
	echo "<h1>Array Actualmente:</h1> ";
	//recorrer el array y mostrar los datos, con el array sin modificar
	foreach ($cumpleaños as $mes => $nombre) {
		echo "<p style='color:darkGreen '><strong>".$mes."</strong></p><tr>";
		foreach ($nombre as $persona) {
			echo "<td> ".$persona.", </td>";
		}
		echo "</tr>";
	}	

		echo "</br></br><h3 style='color:Red '>Has introducido a " . $nombreN . " en el mes " . $mesN . " ahora hay " . añadirPersonas($nombreN, $mesN, $cumpleaños) . " usuarios en este mes</h3></br>"; 
		//recorrer el array y mostrar los datos, con el array modificado
		echo "<h1>Array despues de añadir un cumpleaños:</h1> ";
		foreach ($cumpleaños as $mes => $nombre) {
		echo "<p style='color:darkGreen '><strong>".$mes."</strong></p><tr>";
		foreach ($nombre as $persona) {
			echo "<td> ".$persona.", </td>";
		}
		echo "</tr>";
	}	
		


	?>
</body>
</html>