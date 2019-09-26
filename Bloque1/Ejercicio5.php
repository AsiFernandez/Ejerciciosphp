<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 5</TITLE>
   </HEAD>
   <BODY>
      
      <?php
      
      $edad = rand(1, 100);
      $altura = rand(50, 200);
      $acompañado = rand(1, 100);

      if ($edad >= 10 || $altura >= 120) {
        echo " La persona es mayor de 10 años o mide mas de 120 cm";
        echo " <br> la pesona tiene " . $edad . "años, mide " . $altura ;
        } elseif ($edad >= 6 && $acompañado > 10 ) {
        echo "La persona es mayor de 6 años y va acompañada";
      }else{
        echo "la persona no puede montar en la atraccion";
      }
      
      
      ?>

   </BODY>
</HTML>
