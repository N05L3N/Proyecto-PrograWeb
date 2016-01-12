<!DOCTYPE html>

	<html>
		<head>
			<meta charset = "UTF-8" />
			<style type="text/css">
			
			.catalogo {
				font-family: Verdana, Arial, Helvetica, sans-serif;
				font-size: 16px;
				color: #333333;
				width: 100%;
			}
			#tabla
			{
				margin-left: 14em;
			}
			</style>
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../../css/style.css">
			<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
			<!--<link rel="stylesheet" type="text/css" href="../css/styleMenu.css">-->
			<!--<script type="text/javascript" src="../js/script.js"></script>-->
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

				<table width="600" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #000000;" bgcolor="#f098908" >
				  <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo"> 
				    <td width="200"><strong>Producto</strong></td>
				    <td width="77"><strong>Precio</strong></td>
				    <td width="25" align="right"><a href="Verventas.php?<?php echo SID ?>" title="Ver el contenido del carrito"><img src="img/vercarrito.gif" width="25" height="21" border="0"></a></td>
				  </tr>
				  <?php
				   error_reporting(0);
					  include("../../php/conectar.php");

						session_start();
						if(isset($_SESSION['prograweb']))
						$carro=$_SESSION['prograweb'];else $carro=false;

						$qry=mysql_query("select * from catalogo order by producto asc");

					  
				  while($row=mysql_fetch_assoc($qry)){
				  ?>
				  <tr valign="middle" class="catalogo"> 
				    <td><?php echo $row['producto'] ?></td>
				    <td><?php echo $row['precio'] ?></td>
				    <td align="center"><?php
					if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador']!=md5($row['id'])){
					
					?><a href="agregacar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>"><img src="img/productonoagregado.gif" border="0" title="Agregar al Carrito"></a><?php }
					else

					{?><a href="borracar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>"><img src="img/productoagregado.gif" border="0" title="Quitar del Carrito"></a><?php } ?></td>
				  </tr><?php } ?>
				</table>

				
					</div>
				</div>

			</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>