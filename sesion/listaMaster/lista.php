<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../../css/style.css">
			<link rel="stylesheet" type="text/css" href="../../css/styleMenu.css">
			<link rel="stylesheet" type="text/css" href="css/styleTabla.css">
			<script type="text/javascript" src="../../js/filtro.js"></script>
		</head>
		<body>
			<header>
				<div id = "acceder">
					<?php
						session_start();
						if(/*isset($_SESSION['user'])*/$_SESSION['logged'] == 'yes')
							{
							echo "<h3>Bienvenido WebMaster " . $_SESSION['user']. " ".$_SESSION['apellido']. "</h3>";
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
	                <ul >
	                    <li><a href="../WebMaster.php">Inicio</a></li>
	                    <li><a href="">Lista de Usuarios</a></li>
	                    <li><a href="agregar/agregar.php">Agregar Usuario</a></li>
	                    <li><a href="PeliAgr/Rentaswm.php">Peliculas</a></li>
	                </ul>
	            </nav>


				<div id="tabla">

				<table>
					<tr>
						<td width="14%">NickName</td>
						<td width="11%">Nombre</td>
						<td width="11%">Apellido</td>
						<td width="27%">Correo</td>
						<td width="13%">Fecha</td>
						<td width="13%">Perfil</td>
						<td width="40%"></td>
						<td width="40%"></td>
					</tr>

			
					<?php  
					  error_reporting(0);
					  include("../../php/conectar.php");
					  $resul = mysql_query("SELECT * FROM usuarios ");
					  $numero = 0;
					  $ban=true;
					  while($row = mysql_fetch_array($resul))
					  {
					  	$clase=$ban?"par":"non";
					  	$ban=!$ban;
					  	echo "<tr class=$clase>";
					    echo "<td>".$row["nick_name"]."</td>";
					    echo "<td>".$row["nombre"]."</td>";
					    echo "<td>".$row["apellido"]."</td>";
					    echo "<td>".$row["correo"]."</td>";    
						echo "<td>".$row["fecha"]."</td>";    
						echo "<td>".$row["perfil"]."</td>";    
						echo "<td><a href='modificar/modificar.php?id=" . $row["id_user"] . "'><input  type='button' value='Mod. s/Pass'/></a></td>";     
						echo "<td><a href='modificar/modificaPass.php?id=" . $row["id_user"] . "'><input  type='button' value='Mod. Pass'/></a></td>";     
						echo "<td><a href='eliminar/eliminar.php?id=" . $row["id_user"] . "'><input  type='button' value='Eliminar'/></a></td>"; 
						echo "</tr>";   
					    $numero++;
					  }
					  echo "<tr><td colspan=\"15\"><b>Total: " . $numero . 
					      "</b></font></td></tr>";
					  
					  mysql_free_result($resul);
					  mysql_close($link);
					?>
					</div>
					</table>
				</div>

			</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>