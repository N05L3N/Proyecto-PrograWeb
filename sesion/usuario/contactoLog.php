<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../../css/style.css">
			<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
			<script type="text/javascript" src="js/script.js"></script>
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
								header('location: ../error/error.html');
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
                    <li><a href="recientesLog.php">Recientes</a></li>
                    <li><a href="listadoLog.php">Listado</a></li>
                    <li><a href="acercaLog.php">Acerca de</a></li>
                    <li><a href="contactoLog.php">Contacto</a></li>
                    <li><a href="../Vender/ventas.php">Compra</a></li>

                </ul>
                <div class="serach_bar">
				<a href="" class=""></a>
				<input type="text" id="bar">
				</div>
            </nav>

			<section id="info">
			<article>
			<p>

			 Erick Javier Ruiz Hernández</br>
			<a href="www.facebook.com/erickRui007" class="infoc">Facebook</a></br>
			e-mail: erick.ruizhernandez@outlook.com</br>
			</p>
			<br>
			<p>

			 Nelson Alejandro Soto Duran</br>
			<a href="www.facebook.com/noslenSoto" class="infoc">Facebook</a></br>
			e-mail: noslen_soto@hotmail.com</br>
			</p>
			<br>
			<p>

			 Isaac Mendez</br>
			<a href="www.facebook.com/isaacMendez" class="infoc">Facebook</a></br>
			e-mail: isaac_04Mendez@hotmail.com</br>
			</p>
			</article>
			</section>
			

		</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>