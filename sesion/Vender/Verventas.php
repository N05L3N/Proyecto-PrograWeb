<!DOCTYPE html>

	<html>
		<head>
			<meta charset = "UTF-8" />
			<style type="text/css">
			<style>
			
			.tit { 
			 font-family: Verdana, Arial, Helvetica, sans-serif; 
			 font-size: 16px; 
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
			#tabla
			{
				margin-left: 8em;
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

				
				<div id="tabla" >

				<h1 align="center">VENTAS</h1> 
					<?php 
					 error_reporting(0);
					  include("../../php/conectar.php");
					  session_start(); 
					  $carro=$_SESSION['prograweb']; 

					if($carro){ 
					?> 
				<table width="720" border="0" cellspacing="0" cellpadding="0" align="center" > 
					 <tr bgcolor="#333333" class="tit"> 
					 <td width="105">Producto</td> 
					 <td width="207">Precio</td> 
					 <td colspan="2" align="center">Cantidad de Unidades</td> 
					 <td width="100" align="center">Borrar</td> 
					 <td width="159" align="center">Actualizar</td> 
				 </tr> 
					 <?php 
					 $color=array("#ffffff","#F0F0F0"); 
					 $contador=0; 
					 $suma=0; 
					 foreach($carro as $k => $v){ 
					 $subto=$v['cantidad']*$v['precio']; 
					 $suma=$suma+$subto; 
					 $contador++; 
					 ?> 
				 <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>"> 
					 <tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'> 
					 <td><?php echo $v['producto'] ?></td> 
					 <td><?php echo $v['precio'] ?></td> 
					 <td width="43" align="center"><?php echo $v['cantidad'] ?></td> 
					 <td width="136" align="center"> 
						 <input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8"> 
						 <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td> 
					 <td align="center"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['id'] ?>"><img src="img/trash.gif" width="12" height="14" border="0"></a></td> 
					 <td align="center"> 
					 	<input name="imageField" type="image" src="img/actualizar.gif" width="20" height="20" border="0"></td> 
				 </tr></form> 
				 <?php }?> 
				</table> 
				
				<div align="center" ><span class="prod"><font color="aqua" size=4>Total de Artículos: <?php echo count($carro); ?></font></span> 
				</div><br> 
				<div align="center"><span class="prod"><font color="aqua" size=4>Total: $<?php echo number_format($suma,2); ?></font></span></div> 
				<br> 
				<div align="center"><span class="prod"><font color="aqua" size=4>Continuar la selección de productos</font></span> 
				 <a href="ventas.php?<?php echo SID;?>"><img src="img/continuar.gif" width="13" height="13" border="0" align="absmiddle"></a>&nbsp; 
				 <a href="Pagar.php?<?php echo SID;?>&costo=<?php echo $suma; ?>"><img src="img/finalizarcompra.gif" width="135" height="16" border="0" align="absmiddle"></a> 
				</div> 
				 
				<?php }else{ ?> 
					<p align="center"> <span class="prod">No hay productos seleccionados</span> <a href="ventas.php?<?php echo SID;?>"><img src="img/continuar.gif" width="13" height="13" border="0"></a> 
					 <?php }?> 
					</p> 
				
					</div>
				</div>

			</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>