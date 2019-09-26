<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 1</TITLE>
   </HEAD>
   <BODY>
      
      <?php
      $vendido = rand(1000, 50000);

      if ($vendido < 10000) {
        echo "El total vendido equivale a: $vendido, La comision sera de un 5%. .";
      } else {
        if ($vendido >= 10000 && $vendido < 20000) {
          echo "El total vendido equivale a: $vendido, La comision sera de un 8%. ";
        } else {
          if ($vendido >= 20000 && $vendido < 40000) {
           echo "El total vendido equivale a: $vendido, La comision sera de un 10%.  ";
          } else {
           if ($vendido >= 40000 ) {
             echo "El total vendido equivale a: $vendido, La comision sera de un 13%. ";
           } else{

           }
           
          }
          
        }
        
      }
      
      
      ?>

   </BODY>
</HTML>