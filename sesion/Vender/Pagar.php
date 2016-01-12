<!DOCTYPE html>

	<html>
		<head>
			<meta charset = "UTF-8" />
			<style type="text/css">
			.tit { 
			 font-family: Verdana, Arial, Helvetica, sans-serif; 
			 font-size: 14px; 
			 color: #FFFFFF; 
			} 
			.prod { 
			 font-family: Verdana, Arial, Helvetica, sans-serif; 
			 font-size: 14px; 
			 color: #333333; 
			} 
			h1 { 
			 font-family: Verdana, Arial, Helvetica, sans-serif; 
			 font-size: 20px; 
			 color: #990000; 
			} 

			
			</style>
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../../css/style.css">
			<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
			<script type="text/javascript" src="../../js/filtro.js"></script>
		</head>

		<body>
			<header>
				<div id = "acceder">
					<?php
						session_start();
						if(/*isset($_SESSION['user'])*/$_SESSION['logged'] == 'yes')
							{
							echo "<h3>Bienvenido Usuario !! " . $_SESSION['user']. " ".$_SESSION['apellido']. "</h3>";
							}
							else
							{
								header('location: ../../error/error.html');
							}
					?>
					<a href="../cerrarSesion/cerrarSesion.php"><input type="button"value="Cerrar Sesión"></a>
				</div>
				<div id = "cabecera">
					<img id = "img1" src="../../img/banner.png"/>
				</div>
			</header>

				<div id = "contenedor">
			  		<nav>
		                <ul class="menu">
		                    <li><a href="../usuario.php">Inicio</a></li>
		                    <li><a href="../usuario/recientesLog.php">Recientes</a></li>
		                    <li><a href="../usuario/listadoLog.php">Listado</a></li>
		                    <li><a href="../usuario/acercaLog.php">Acerca de</a></li>
		                    <li><a href="../usuario/contactoLog.php">Contacto</a></li>
		                    <li><a href="Vender/ventas.php">Compra</a></li>
		                </ul>
		                 <div class="serach_bar">
						<a href="" class=""></a>
						<input type="text" id="bar">
						</div>
		            </nav>

				

				<div id="tabla">

				<h1 align="center">COBRAR</h1> 
					<?php 
					 error_reporting(0);
					  include("../../php/conectar.php");
					  session_start(); 
					  $carro=$_SESSION['prograweb']; 
					  $products=''; 
					  $products2=''; 
					   
					   foreach($carro as $k => $v){ 
					   $unidad=$v['cantidad']>1?" unidades de ":" unidad de "; 
					   $products.=$v['cantidad'].$unidad.$v['producto']."+"; 
					   $products2.=$v['cantidad'].$unidad.$v['producto'].", "; 
					   } 
					   
					  $products=substr($products,0,(strlen($products)-1)); 
					  $products2=substr($products2,0,(strlen($products2)-2)); 
					?> 
					
					<form name="f1" id="f1" action="total.php" method="post"> 
					<fieldset> 
					 <legend class="prod"><strong><font color="aqua" size=4>Finalizar la Compra</font></strong></legend> 

					<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#EABB5D" style=" border-color:#000000; border-style:solid;border-width:1px;"> 
					<tr> 
					<td align="left" valign="top"><span class="prod"><strong>Detalle de los Productos Seleccionados</strong>:</span><br> 
					<span class="texto1negro"> </span><span class="prod"><strong>Productos:</strong> <?php echo $products; ?><br> 
					<strong>Pecio Total:</strong> $<?php echo number_format($_GET['costo'],2) ?> </span></td> 
					</tr> 
					</table> 
					<input type="submit" name="Submit" href="ventas.php" value="Cobrar">
					</fieldset> 
					</form> 
				
					</div>
				</div>

			</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>