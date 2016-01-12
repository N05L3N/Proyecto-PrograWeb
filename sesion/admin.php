<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../css/styleMenu.css">
			<!--<script type="text/javascript" src="js/script.js"></script>-->
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
								header('location: ../error/error.html');
							}
					?>
					<a href="cerrarSesion/cerrarSesion.php"><input type="button"value="Cerrar Sesión"></a>
				</div>
				<div id = "cabecera">
					<img id = "img1" src="../img/banner.png"/>
				</div>
			</header>

			<div id = "contenedor">

				<nav>
	                <ul >
	                    <li><a href="admin.php">Inicio</a></li>
	                    <li><a href="lista/lista.php">Lista de Usuarios</a></li>
	                    <li><a href="lista/registrados.php">Regitrados</a></li>
	                    <li><a href="EstadoRent/Rentas.php">Estado de rentas</a></li>	                    
	                </ul>
	            </nav>


			</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com </h5>
		</footer>
				

		</body>
	</html>