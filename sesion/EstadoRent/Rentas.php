<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../../css/style.css">
			<link rel="stylesheet" type="text/css" href="../../css/styleMenu.css">
			<link rel="stylesheet" type="text/css" href="../../css/styleTabla.css">
			<script type="text/javascript" src="../../js/filtro.js"></script>
		</head>
		<body>
			<header>
				<div id = "acceder">
					<?php
						session_start();
						if(/*isset($_SESSION['user'])*/$_SESSION['logged'] == 'yes')
							{
							echo "<h3>Bienvenido Administrador!! " . $_SESSION['user']. " ".$_SESSION['apellido']. "</h3>";
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
	                    <li><a href="../admin.php">Inicio</a></li>
	                    <li><a href="../lista/lista.php">Lista de Usuarios</a></li>
	                    <li><a href="../lista/registrados.php">Regitrados</a></li>
	                    <li><a href="Rentas.php">Estado de rentas</a></li>
	                </ul>
	            </nav>

				<table>
					<tr>
						<td width="40%">Nombre de la pelicula</td>
						<td width="15%">precio</td>
						<td width="15%">Numero de rentas</td>
						<td width="15%">Eliminar pelicula</td>
					</tr>
				</table>

				<div id="tabla">
				<table>
					<?php  
					  error_reporting(0);
					  include("../../php/conectar.php");
                      $resul = mysql_query("SELECT * FROM upload;");
                          while($row = mysql_fetch_array($resul)){
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["precio"]."</td>";
                            echo "<td>".$row["numdescargas"]."</td>";
                            echo "<td><a href='eliminar/eliminar.php?id=" . $row["id"] . "'><input  type='button' value='Eliminar'/></a></td></tr>"; 
                          }
                         
                          
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