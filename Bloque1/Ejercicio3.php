<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 1</TITLE>
   </HEAD>
   <BODY>
	<?php
		$edad = rand(1, 100);
        
        if ($edad >= 0 && $edad <= 9) {
           echo('La edad introducida esta en el rango de edad entre 0 y 9');
        } else {
          if ($edad >= 10 && $edad <= 19) {
             echo('La edad introducida esta en el rango de edad entre 10 y 19');
          } else {
              if ($edad >= 20 && $edad <= 29) {
                 echo('La edad introducida esta en el rango de edad entre 20 y 29');
              } else {
                if ($edad >= 30 && $edad <= 39) {
                   echo('La edad introducida esta en el rango de edad entre 30 y 39');
                } else {
                    if ($edad >= 40 && $edad <= 49) {
                       echo('La edad introducida esta en el rango de edad entre 40 y 49');
                    } else {
                        if ($edad >= 50 && $edad <= 59) {
                           echo('La edad introducida esta en el rango de edad entre 50 y 59');
                        } else {
                            if ($edad >= 60 && $edad <= 69) {
                               echo('La edad introducida esta en el rango de edad entre 60 y 69');
                            } else {
                                if ($edad >= 70 && $edad <= 79) {
                                   echo('La edad introducida esta en el rango de edad entre 70 y 79');
                                } else {
                                    if ($edad >= 80 && $edad <= 89) {
                                       echo('La edad introducida esta en el rango de edad entre 80 y 89');
                                    } else {
                                        if ($edad >= 90 && $edad <= 100) {
                                           echo('La edad introducida esta en el rango de edad entre 90 y 100');
                                        } else {
                                        }
                                    }
                                }
                            }
                            
                        }
                    }
                    
                }
                
              }
              
          }
          
        }
        

	?>
   </BODY>
</HTML>
