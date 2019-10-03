<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 10</title>
</head>
<body>
	<?php
        //Creamos la clase persona
    	class Persona {
            
            // Atributos de las personas
            private $nombre = '';
            private $apellido = '';
            private $dni = '';
            
            //Constructor con los parametros de la persona
            public function __construct($nombre, $apellido, $dni) {
                $this->nombre = $nombre;
                $this->apellido = $apellido;
                $this->dni = $dni;
            }

            //Metodos get y set de cada atributo
            public function setNombre($nombre) {
                $this->nombre = $nombre;
            }
            public function getNombre() {
                echo $this->nombre;
            }
            public function setApellido($apellido) {
                $this->apellido = $apellido;
            }
            public function getApellido() {
                echo $this->apellido;
            }
            public function setDni($dni) {
                $this->dni = $dni;
            }
            public function getDni() {
                echo $this->dni;
            }

            //Funcion para mostrar los datos en pantalla
            public function mostrarDatos() {
                echo "Persona: ".$this->nombre." ".$this->apellido;
            }
        }
            //clase usuario que extiende de persona
            class User extends Persona {
				private $puntos = 0;
				// Declaración de los métodos get y set
				public function getPuntos() {
					echo $this->puntos;
				}
				public function setPuntos($puntos) {
					$this->puntos = $puntos;
				}
				public function mostrarDatos() {
					echo "User: ". $this->nombre." ".$this->apellido;
				}
				public function comprobarPuntos() {
					if ($this->puntos >= 100)
						echo "Has ganado el juego!!";
				}
			}
		


	?>
</body>
</html>