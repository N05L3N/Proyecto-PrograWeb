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
            
            <section>
                <article >
                    <header>
                        <h2>La vision de la pagina</h2>
                        <p>
                      Esta pagina ha sido realizada para compartir las mejores peliculas del cine actual y contemporaneo.  
                    </p>
                    </header>
                    
                   
                </article>
                   <br>
                <article>
                    <header>
                        <h2>Rumores o Spoilers</h2>
                         <p>
                      A quien le gustan los rumores o spoilers que se pueden encontrar en el internet con respecto a próximos estrenos, si eres uno de ellos, esta pagina es para ti, encontraras los rumores y spoilers que estén sonando a diario¡¡¡
                    </p>
                    </header>
                   
                    
                </article>

                

            </section>
			

		</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>