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
							echo "<h3>Bienvenido " . $_SESSION['user']. " ".$_SESSION['apellido']. "</h3>";
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
	                    <li><a href="">Inicio</a></li>
	                    <li><a href="">Peliculas</a></li>
	                    <li><a href="">Otra Cosa</a></li>
	                </ul>
	            </nav>

	            <center><h2><p>En estos momentos tu cuenta se</p>
	            				encuentra Inactiva Ponte en contacto </p> con el Web Master 
	            				para solucionar tu problema</p></h2></center>

	            	<img src="img/bloked.png" title="Usuario Bloqueado"/>

	            	<h4>Contactar al Web Master</h4>
	            	<a href="https://www.facebook.com/noslen.soto"><img src="img/facebook.png" title="Faccebok Nelson Soto"/></a>

			</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>