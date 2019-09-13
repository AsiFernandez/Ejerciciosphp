<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 1</TITLE>
   </HEAD>
   <BODY>
      
      <?php
        $pisos = rand(1, 10);
        $puertas = rand(1,4);

        for ($i=1; $i <= $pisos ; $i++) { 
            echo '<br>';
            for ($j=1; $j <= $puertas ; $j++) { 
                echo ('piso numero ' . $i . ' puerta numero ' . $j);
            }
        }
      ?>

   </BODY>
</HTML>
