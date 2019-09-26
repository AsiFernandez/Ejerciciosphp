<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 7</TITLE>
   </HEAD>
   <BODY>
      
      <?php

      $numero = 17;

      do {
      	if ($numero % 2 == 0) {
      			$numero = $numero /2;
      			echo $numero . ", ";
	    }else{
	    	$numero = ($numero*3) + 1;
	      	echo $numero . ", ";
	    }
      } while ( $numero > 1);
    	
    
       
      		

      
      
      ?>

   </BODY>
</HTML>