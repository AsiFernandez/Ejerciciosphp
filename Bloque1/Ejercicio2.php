<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 2</TITLE>
   </HEAD>
   <BODY>
      
      <?php
        $num1 = rand(1, 10);
        $num2 = rand(1,10);
        $num3 = rand(1,10);
        
        if ($num1 > $num2 && $num1 > $num3) {
            echo ('el numero mas alto ha sido el primero introducido, los numeros son: ' . $num1 . ', '. $num2 . ', ' . $num3);
        } else {
            if ($num2 > $num1 &&$num2 > $num3) {
                echo('el numero mas alto ha sido el segundo introducido, los numeros son: ' . $num1 . ', ' .  $num2 . ', ' . $num3);
            } else {
                if ($num3 > $num1 && $num3 > $num2) {
                    echo ('el numero mas alto ha sido el segundo introducido, los numeros son: ' . $num1 . ', ' . $num2 . ', ' .  $num3);
                } else {
                    echo (' hay dos o mas numeros repetidos');
                }
                
            }
            
        }
        
      ?>


   </BODY>
</HTML>
