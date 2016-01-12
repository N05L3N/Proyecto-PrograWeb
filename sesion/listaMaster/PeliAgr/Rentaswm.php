<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8" />
			<title> ITCH II </title>
			<link rel="stylesheet" type="text/css" href="../../../css/style.css">
			<link rel="stylesheet" type="text/css" href="../../../css/styleMenu.css">
			<link rel="stylesheet" type="text/css" href="../css/styleTabla.css">
			<script type="text/javascript" src="../../js/filtro.js"></script>
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
	                    <li><a href="Rentaswm.php">Peliculas</a></li>
	                </ul>
	            </nav>


				<table>
					<tr>
						<td width="40%">Nombre de la pelicula</td>
						<td width="15%">precio</td>
						<td width="15%">Numero de rentas</td>
						<td width="15%">Eliminar pelicula</td>
					</tr>


					<?php
					if(isset($_POST['upload'])){

					        $fileName = $_FILES['userfile']['name'];
					        $tmpName  = $_FILES['userfile']['tmp_name'];
					        $fileSize = $_FILES['userfile']['size'];
					        $fileType = $_FILES['userfile']['type'];
					       
					        $fp = fopen($tmpName, 'r');
					        $content = fread($fp, $fileSize);
					        $content = addslashes($content);
					        fclose($fp);
					        if(!get_magic_quotes_gpc()){
					            $fileName = addslashes($fileName);
					        }

					        include("../../../php/conectar.php");   
					              
					        $query = "INSERT INTO upload (name, size, type, content ) ".
					                 "VALUES ('$fileName', '$fileSize', '$fileType', '$content' )";
					        mysql_query($query) or die('Error, query failed');                 
					                
					       echo "<br>Archivo $fileName Subido<br>";
					} ?>   

					 <?php
					  error_reporting(0);
					  include("../../../php/conectar.php");
                      $resul = mysql_query("SELECT * FROM upload;");
                          while($row = mysql_fetch_array($resul)){
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["precio"]."</td>";
                            echo "<td>".$row["numdescargas"]."</td>";
                            echo "<td><a href='eliminar/eliminar.php?id=" . $row["id"] . "'><input  type='button' value='Eliminar'/></a></td></tr>"; 
                          }
                         
                          
                         
                    ?>   
					
					</table>


		 				<p><h2>Subir Una Pelicula para renta</h2></p>
			            <form action="" method="post" enctype="multipart/form-data" name="uploadform">
			              <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
			                <tr> 
			                  <td width="246"><input type="hidden"
			                      name="MAX_FILE_SIZE" value="2000000"><input name="userfile"
			                      type="file" class="box" id="userfile">
			                     </td>
			                  <td width="80"><input name="upload" type="submit" class="box" id="upload" value="  Subir  "></td>
			                </tr>
			              </table>
			            </form>




				</div>

	           


		<footer>
			<h5>Copyright © isaneric@hotmail.com </h5>
		</footer>
				

		</body>
	</html>