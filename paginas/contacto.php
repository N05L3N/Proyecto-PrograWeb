<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../css/estilos.css">
			<script type="text/javascript" src="js/script.js"></script>
		</head>
		<body>
			<header>
				<div id = "acceder">
					<form action="../../php/validar.php" method="post">	
					<label>NickName:</label> 
					<input id = "nom" name="nickname" type = "text" placeholder="Usuario" autofocus/>
					<label>Contraseña:</label>
					<input id = "pass" name="pass" type = "password" placeholder="Contraseña"/>
					<input id = "InSe" type = "submit" value = "Iniciar Sesión"/>
					</form>
					<a id="btn"href="../registro/registro.html"><input id = "reg" type = "button" value = "Regístrarse"/></a>
				</div>
				<div id = "cabecera">
					<img id = "img1" src="../img/banner.png"/>
				</div>
			</header>

			<div id = "contenedor">
			        <nav>
                <ul class="menu">
                    <li><a href="../index.html">Inicio</a></li>
                    <li><a href="recientes.php">Recientes</a></li>
                    <li><a href="listado.php">Listado</a></li>
                    <li><a href="acerca.php">Acerca de</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
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
			<a href="https://www.facebook.com/noslen.soto" class="infoc">Facebook</a></br>
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