<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 7</TITLE>
   </HEAD>
   <BODY>
      
      <center><?php
            $base = rand(1, 20);

         echo "piramide de $base asteriscos <br> <br>" ; 
         for($i=1; $i<=$base; $i = $i + 2){
          echo " ";
            for($j=1; $j <= $i; $j = $j +2 ){
                    echo " * ";
        }
        echo "<br />";
    }




      ?></center>

   </BODY>
</HTML>