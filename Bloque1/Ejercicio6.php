<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 6</TITLE>
   </HEAD>
   <BODY>
      
      <?php

      $cantidad = rand(100, 1000);
      $potencia = rand(1, 10);
      $numerito = 0;
      echo "la cantidad es " . $cantidad. "<br>" . "<br>";
      echo "la potencia es " . $potencia . "<br>" . "<br>";

     do {
         $resultado = pow($numerito, $potencia);
         
         if ($resultado <= $cantidad) {
            echo $numerito . " - ". $resultado. "<br>";
            $numerito++;
         }
        
     } while ( $cantidad > $resultado); 
      
      
     
      ?>

   </BODY>
</HTML>