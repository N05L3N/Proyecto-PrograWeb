<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			
			<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
			<link rel="stylesheet" type="text/css" href="../../css/style.css">
			<link rel="stylesheet" type="text/css" href="../../css/stylelist.css">
			
			<script type="text/javascript" src="../js/script.js"></script>
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

		
				<h2>Estrenos</h2>
				
					<a href="infop/22js.html"><img id = "uno" src="../../covers/22js.jpg"></a>
					
					<a href="infop/lucy.html"><img id = "dos" src="../../covers/lucy.jpg"></a>
					<a href="infop/annabelle.html"><img id = "tres" src="../../covers/annabelle.jpg"></a>
					<a href="infop/exodo.html"><img id = "cuatro" src="../../covers/exodo.jpg"></a>
					<a href="infop/sinsajo.html"><img id = "cinco" src="../../covers/sinsajo.jpg"></a>
					<a href="infop/needfor.html"><img id = "seis" src="../../covers/needfor.jpg"></a>
					<a href="infop/hobbit2.html"><img id = "siete" src="../../covers/hobbit2.jpg"></a>
					<a href="infop/hercules.html"><img id = "ocho" src="../../covers/hercules.jpg"></a>
					<a href="infop/guardianes.html"><img id = "cinco" src="../../covers/guardianes.jpg"></a>
					<a href="infop/vecinos.html"><img id = "seis" src="../../covers/vecinos.jpg"></a>
					<a href="infop/draft.html"><img id = "siete" src="../../covers/draft.jpg"></a>
					<a href="infop/peaboy.html"><img id = "ocho" src="../../covers/peaboy.jpg"></a>
			<h2>Varios Titulos</h2>
				
					<img id = "uno" src="../../covers/conjuro.jpg">
					<img id = "dos" src="../../covers/aftere.jpg">
					<img id = "tres" src="../../covers/dragon.jpg">
					<img id = "cuatro" src="../../covers/edge.jpg">
					<img id = "cinco" src="../../covers/frozen.jpg">
					<img id = "seis" src="../../covers/google.jpg">
					<img id = "siete" src="../../covers/gijoe.jpg">
					<img id = "ocho" src="../../covers/elysium.jpg">
					<img id = "cinco" src="../../covers/red2.jpg">
					<img id = "seis" src="../../covers/percy2.jpg">
					<img id = "siete" src="../../covers/next.jpg">
					<img id = "ocho" src="../../covers/ninos2.jpg">
					<br>
					<br>
					<br>
					<div id="tit10"><h2>TOP 10</h2></div>
					<div class="list_top10">
						<div class="top10"><div class="name_top10"><a href="">1. Guardianes de la Galaxia</a></div></div>
						<div class="top10"><div class="name_top10"><a href="">2. Frozen Una Aventura Sobre Hielo</a></div></div>
						<div class="top10"><div class="name_top10"><a href="">3. Señor de los cielos 2a Temporada</a></div></div>
						<div class="top10"><div class="name_top10"><a href="">4. Sinsajo</a></div></div>
						<div class="top10"><div class="name_top10"><a href="">5. Breaking Bad Serie Completa</a></div></div>
						<div class="top10"><div class="name_top10"><a href="">6. Sons of Anarchy</a></div></div>
						<div class="top10"><div class="name_top10"><a href="">7. Hobbit 2</a></div></div>
						<div class="top10"><div class="name_top10"><a href="">8. Game of Thrones</a></div></div>
						<div class="top10"><div class="name_top10"><a href="">9. El Planeta de los Simios</a></div></div>
						<div class="top10"><div class="name_top10"><a href="">10. Arrow</a></div></div>
					</div>

		</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>