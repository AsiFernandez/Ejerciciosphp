<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 1</TITLE>
   </HEAD>
   <BODY>
      
      <?php

      $cantidad = rand(100, 1000);
      $potencia = rand(1, 10);
      $numerito = 0;
      echo "la cantidad es " . $cantidad. "<br>";
      echo "la potencia es " . $potencia . "<br>";

     do {
             $numerito++;

         $resultado = pow($numerito, $potencia);
         echo $numerito . " - ". $resultado. "<br>";

        
        
     } while ( $cantidad > $resultado); 
      
      
     
      ?>

   </BODY>
</HTML>