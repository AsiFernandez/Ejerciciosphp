<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 4</TITLE>
   </HEAD>
   <BODY>
      
    <?php
      $cadena = "somos"; 
     $separar = explode(" ", strtolower($cadena)); //explode separa en substrings cada vez que encuentre el parametro establecido entre ""
      
      foreach($separar as $palabra)
      {
        trim($palabra);       //elimina los espacios a la izquierda y derecha de la palabra
        $nuevo .= $palabra;   //va añadiendo las palabras que recibe creando una frase sin espacios y toda seguida
      }

      if($nuevo == strrev($nuevo)){    //compara la palabra construida antes con la misma palabra revertida con strrev
        echo "Si";
      }else {
        echo "No";
      }
    ?>  

   </BODY>
</HTML>
