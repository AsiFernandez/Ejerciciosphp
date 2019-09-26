<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Ejercicio 10</TITLE>
   </HEAD>
   <BODY>
      
   <?php
      $total_compra = rand(1*100,100*100)/100;
      $tipo = rand(1,2);
      if ($tipo == 1)
         $tipo_compra = "mascota";
      else
         $tipo_compra = "ropa";
      

      

   if($total_compra < 19){
      if($tipo_compra == "mascota")
         echo "Tu compra es de una mascota y inferior a 19 euros No se puede realizar envio" . $total_compra;
      else
         echo "Tu compra es de ropa lo cual supone que los gastos de envio sean 9 euros <br>El precio final es de: ". ($total_compra*1.21 + 9) ."euros";
   }

   elseif ($total_compra < 40 and $total_compra >=19) {
      echo " Los gastos de envio son 9 euros <br>";
      if($tipo_compra == "mascota")
         echo "El precio final es de: ". ($total_compra*1.10 + 9) ." euros";
      else
         echo "El precio final es de: ". ($total_compra*1.21 + 9) ." euros";
   }

   elseif ($total_compra > 80) {
      echo "Los gastos de envio son gratuitos <br>";
      if($tipo_compra == "mascota")
         echo "El precio final es de: ". ($total_compra*1.10) ." euros";
      else
         echo "El precio final es de: ". ($total_compra*1.21) ." euros";
   }
   elseif ($total_compra>40 and $total_compra < 80) {
      echo "El ejercicio no dice que hacer entre los precios de 40 a 80, asique aqui te muestro el precio:" . $total_compra;
   }

   

   ?>
   </BODY>
</HTML>