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

		<aside>
                <div >
                 <img id = "uno" src="../../covers/conjuro.jpg">
					<img id = "dos" src="../../covers/aftere.jpg">
					<img id = "tres" src="../../covers/dragon.jpg">
					<img id = "cuatro" src="../../covers/edge.jpg">
					<img id = "cinco" src="../../covers/frozen.jpg">
					<img id = "seis" src="../../covers/google.jpg">   
                </div>
            </aside>
				
					
					


		</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>