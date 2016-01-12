<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../css/estilos.css">
			<!--<link rel="stylesheet" type="text/css" href="../css/styleMenu.css">-->
			<!--<script type="text/javascript" src="../js/script.js"></script>-->
			<style>
					a
					{
						text-decoration: none;
					}
					table
					{
						width: 80%;
						margin-left: 10%;
					}
					td
					{
						padding: 0;
					}
					#contenedor
					{
						height: 50em;
					}
					.imagen
					{
						width: 35%;
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
							echo "<h3>Bienvenido Usuario !! " . $_SESSION['user']. " ".$_SESSION['apellido']. "</h3>";
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
                <ul class="menu">
                    <li><a href="usuario.php">Inicio</a></li>
                    <li><a href="usuario/recientesLog.php">Recientes</a></li>
                    <li><a href="usuario/listadoLog.php">Listado</a></li>
                    <li><a href="usuario/acercaLog.php">Acerca de</a></li>
                    <li><a href="usuario/contactoLog.php">Contacto</a></li>
                    <li><a href="Vender/ventas.php">Compra</a></li>
                </ul>
                 <div class="serach_bar">
				<a href="" class=""></a>
				<input type="text" id="bar">
				</div>
            </nav>

				<!--Nos conectamos a la DB para realiar la descarga -->
				<?php
				if(isset($_GET['id'])){
					include("../php/conectar.php");
				    //include 'config.php';
				    //$connection=mysql_connect("$bdservidor","$bdunombre","$bdpass")or die("Error conectando a la base de datos");
				    //$db=mysql_select_db("$bdnombre",$connection)or die ("Error seleccionando la base de datos");
				    $id      = $_GET['id'];
				    $query   = "SELECT name, type, size, content FROM upload WHERE id = '$id'";
				    $result  = mysql_query($query) or die('Error, query failed');
				    list($name, $type, $size, $content) = mysql_fetch_array($result);
				    header("Content-Disposition: attachment; filename=$name");
				    header("Content-length: $size");
				    header("Content-type: $type");
				   

				    $id = (int) mysql_real_escape_string($_GET['id']);
				    $sql = "SELECT * FROM upload where id=$id";
				    $query = mysql_query($sql);
				    // Si existe algún registro del archivo, realizamos las operaciones oportunas
				    if (@mysql_num_rows($query)){
				    $datos = mysql_fetch_object($query);
				    $sql ="UPDATE upload SET numdescargas=" . ($datos->numdescargas + 1)." where id=$id";
				    mysql_query($sql);
				    }
				     exit;
				}
				?>

				<?php
					include("../php/conectar.php");
				    //include 'config.php';
				    //$connection=mysql_connect("$bdservidor","$bdunombre","$bdpass")or die("Error conectando a la base de datos");
				    //$db=mysql_select_db("$bdnombre",$connection)or die ("Error seleccionando la base de datos");
				    $query  = "SELECT id, name FROM upload";
				    $result = mysql_query($query) or die('Error, query failed');
				        
				        if(mysql_num_rows($result) == 0){
				            echo "La base de datos esta vacia <br>";
				        }
				        else{
				            //while(list($id, $name) = mysql_fetch_array($result)){
				    ?>  
				    <table width="350" border="1" cellpadding="1" cellspacing="1" class="box">
				        <tr> 
					        <td>
					        	<img class="imagen"src="img/guardianes.jpg"><br>
					        	<a href="usuario.php?id=5"><input type="button" value="Rentar pelicula"></a>
					    	</td>
					        <td>
					        	<img class="imagen"src="img/hercules.jpg"><br>
					        	<a href="usuario.php?id=4"><input type="button" value="Rentar pelicula"></a>
					        </td>
				    	</tr>
				    	<tr>
				    		<td>
				    			<img class="imagen"src="img/hobbit2.jpg"><br>
					        	<a href="usuario.php?id=6"><input type="button" value="Rentar pelicula"></a>
					    	</td>
					        <td>
					        	<img class="imagen"src="img/lucy.jpg"><br>
					        	<a href="usuario.php?id=7"><input type="button" value="Rentar pelicula"></a>
					    	</td>
					    </tr>
					    <tr>
					        <td>
					        	<img class="imagen"src="img/peaboy.jpg"><br>
					        	<a href="usuario.php?id=15"><input type="button" value="Rentar pelicula"></a>
					        </td>
					        <td>
					        	<img class="imagen"src="img/sinsajo.jpg"><br>
					       	 	<a href="usuario.php?id=16"><input type="button" value="Rentar pelicula"></a>
					        </td>
				        </tr>
				    </table>

				    <?php        
				       // }
				    }
				?>




			</div>

		<footer>
			<h5>Copyright © isaneric@hotmail.com</h5>
		</footer>
				

		</body>
	</html>