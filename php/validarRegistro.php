<meta charset = "UTF-8" />
<?php	
	require("conectar.php");


	$nick = $_POST['nick_name'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];

	$pass = $_POST['pass'];
		$encrip = md5 ($pass);

	$pass_r = $_POST['pass_r'];
		$encrip_r = md5 ($pass_r);
		
	$correo = $_POST['correo'];


	$resul = mysql_query("SELECT * FROM usuarios WHERE nick_name = '$nick'");

		if($row = mysql_fetch_array($resul))
			{
				echo "<script>alert('El NickName ya Existe eliga Otro')</script>";
				echo "<script>location.href='../registro/registro.html'</script>";
			}
			else
			{

				if ($pass == $pass_r) {
					$insertado = mysql_query("INSERT INTO usuarios (id_user,nick_name,nombre,apellido,pass,pass_r,correo,fecha,perfil) 
												VALUES ('', '".$nick."' ,'".$nombre."','".$apellido."','".$encrip."','".$encrip_r."','".$correo."','".date("Y-m-d" )."','user');");
				echo "<script>alert('Usuario Registrado con Exito')</script>";
				echo "<script>alert('Bienvenido Inicia Sesión')</script>";
				echo "<script>location.href='../index.html'</script>";
				}
				else
				{
					echo "<script>alert('Las Contraseñas no coinciden')</script>";
					echo "<script>location.href='../registro/registro.html'</script>";
				}

			}


?>