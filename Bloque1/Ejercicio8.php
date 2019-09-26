<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 7</TITLE>
   </HEAD>
   <BODY>
      
     <center> <?php

         

         do{
            $base = rand(1, 20);
         }while ( $base % 2 == 0 );

         $altura = floor($base/2);

         for ($i=1; $i <= $base ; $i = $i + 2) { 
            for ($y=1; $y <= $altura ; $y++) { 
            }
            for ($y=1; $y <= $i ; $y++) { 
              echo "*";
            }
            echo "<br>";
            $altura--;
         }

         
      ?></center>

   </BODY>
</HTML>