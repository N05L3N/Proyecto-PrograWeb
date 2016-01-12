<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../../css/style.css">
			<link rel="stylesheet" type="text/css" href="../../css/styleMenu.css">
			<script type="text/javascript" src="../../js/filtro.js"></script>
			<style>
					table td
					{
						border: solid;
						margin-left: 5em;
					}
			</style>

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
	                    <li><a href="lista.php">Lista de Usuarios</a></li>
	                    <li><a href="registrados.php">Regitrados</a></li>
	                    <li><a href="../EstadoRent/Rentas.php">Estado de rentas</a></li>
	                </ul>
	            </nav>

				<h3>Cantidad de Usuarios Registrados por Día</h3>

				<table>
					<tr>
						<td >Día</td>
						<td >Total de Registros</td>
					</tr>

					<?php  
					  error_reporting(0);
					  include("../../php/conectar.php");
					  $resul = mysql_query("SELECT CAST( fecha AS DATE ) as dia, COUNT( id_user ) as total FROM usuarios GROUP BY CAST( fecha AS DATE )");
					  while($row = mysql_fetch_array($resul))
					  {
					  	echo "<tr>";
					    echo "<td>".$row["dia"]."</td>";
					    echo "<td>".$row["total"]."</td>";
						echo "</tr>";   
					  }
					  
					  mysql_free_result($resul);
					  mysql_close($link);
					?>
					</table>

					<!--Obtener la pelicula mas descargada-->
					<h3>Pelicula mas Descargada</h3>
					<table>
					<tr>
						<td >Nombre</td>
						<td >Descargas</td>
					</tr>

					<?php  
					  error_reporting(0);
					  include("../../php/conectar.php");
					   $resul = mysql_query("SELECT name, MAX(numdescargas) AS \"Mas Descargada\" FROM upload");
					  while($row = mysql_fetch_array($resul))
					  {
					  	echo "<tr>";
					    echo "<td>".$row["name"]."</td>";
					    echo "<td>".$row["Mas Descargada"]."</td>";
						echo "</tr>";   
					  }
					  
					  mysql_free_result($resul);
					  mysql_close($link);
					?>
					</table>



				</div>

			</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>