<?php 
session_start(); 
//Asignamos todos los valores guardados en la sesi�n a la variable $carro, como hicimos en las p�ginas anteriores 
$carro=$_SESSION['prograweb']; 
//$products es la variable que usaremos para mostrar los productos en esta p�gina (separados por '+') 
$products=''; 
//$products2 es la que usaremos para enviar a Paypal (separados por ',') 
$products2=''; 
 foreach($carro as $k => $v){ 
 $unidad=$v['cantidad']>1?" unidades de ":" unidad de "; 
 $products.=$v['cantidad'].$unidad.$v['producto']."+"; 
 $products2.=$v['cantidad'].$unidad.$v['producto'].", "; 
 } 
//eliminamos el �ltimo '+': 
$products=substr($products,0,(strlen($products)-1)); 
//eliminamos la �ltima coma y el espacio que sigue a la misma: 
$products2=substr($products2,0,(strlen($products2)-2)); 
?> 
<html> 
<head> 
<title>Finalizar Compra</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<style type="text/css"> 
<!--  
.tit { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 9px; 
 color: #FFFFFF; 
} 
.prod { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 9px; 
 color: #333333; 
} 
h1 { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 20px; 
 color: #990000; 
} 
--> 
</style> 
</head> 
 
<body> 
<!--  Creamos el formulario para cobrar --> 
<form name="f1" id="f1" method="post"> 
<fieldset> 
 <legend class="prod"><strong>Finalizar la Compra</strong></legend> 
<!--  Mostramos el detalle de la compra --> 
<table width="50%" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#EABB5D" style=" border-color:#000000; border-style:solid;border-width:1px;"> 
<tr> 
<td align="left" valign="top"><span class="prod"><strong>Detalle de los Productos Seleccionados</strong>:</span><br> 
<span class="texto1negro"> </span><span class="prod"><strong>Productos:</strong> <?php echo $products; ?><br> 
<strong>Pecio Total:</strong> $<?php echo number_format($_GET['costo'],2) ?> </span></td> 
</tr> 
</table> 
<input type="submit" name="Submit" value="Cobrar"> 
</fieldset> 
</form> 
 
</body> 
</html> 