<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../../../css/style.css">
			<link rel="stylesheet" type="text/css" href="../../../css/styleRegistro.css">
			<link rel="stylesheet" type="text/css" href="../../../css/styleMenu.css">
			<script type="text/javascript" src="js/script.js"></script>
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
					<a href="../../cerrarSesion/cerrarSesion.php"><input type="button"value="Cerrar Sesión"></a>
				</div>
				<div id = "cabecera">
					<img id = "img1" src="../../../img/banner.png"/>
				</div>
			</header>

			<div id = "contenedor">
			     <nav>
	                <ul >
	                    <li><a href="../../webMaster.php">Inicio</a></li>
	                    <li><a href="../lista.php">Lista de Usuarios</a></li>
	                   <li><a href="../agregar/agregar.php">Agregar Usuario</a></li>
	                </ul>
	            </nav>
            </nav>

            <?php
            	include("../../../php/conectar.php");

            	$id=$_GET['id'];
            	$resul = mysql_query("SELECT * FROM usuarios WHERE id_user = '$id'");

            	$row = mysql_fetch_array($resul)


            ?>


			<center>
			</form>
			<h1>Modificar Password</h1>
			
			<form  class="contact_form" id="contact_form" action="modificadoPass.php" method="post">  
			        <div>  
			        	<input type="hidden" name="id_user" value="<?php echo $id;?>"/>
			            <ul>  
			                <li>  
			                    <h2>Solo Password</h2>  
			                    <span class="required_notification">* Escrbir Correctamente</span>  
			                </li>  
			                <li>  
			                    <label>NickName:</label>  
			                    <input name="nick_name" type="text" value="<?php echo $row['nick_name']; ?>" disabled />  
			                </li> 
			                <li>  
			                    <label>Password:</label>  
			                    <input name="pass" type="password" value="<?php echo $row['pass']; ?>" required />  
			                </li>			                
			                <li>  
			                    <label>Repita Password:</label>  
			                    <input name="pass_r" type="password" value="<?php echo $row['pass_r']; ?>" required />  
			                </li>
			            </ul>  
			        </div> 
						  <button class="submit">Guardar</button> 
			</form>
						 <button id="cerrar"onClick="window.location.href='../lista.php' ">Cancelar</button>
		</center>





		</div><!--Fin del contenedor-->

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>