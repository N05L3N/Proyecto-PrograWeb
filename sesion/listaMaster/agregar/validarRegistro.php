<meta charset = "UTF-8" />
<?php	
	require("../../../php/conectar.php");


	$nick = $_POST['nick_name'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];

	$pass = $_POST['pass'];
		$encrip = md5 ($pass);

	$pass_r = $_POST['pass_r'];
		$encrip_r = md5 ($pass_r);
		
	$correo = $_POST['correo'];
	$perfil = $_POST['perfil'];


	if ($perfil != "error") {

	$resul = mysql_query("SELECT * FROM usuarios WHERE nick_name = '$nick'");

		if($row = mysql_fetch_array($resul))
			{
				echo "<script>alert('El NickName ya Existe eliga Otro')</script>";
				echo "<script>location.href = 'agregar.php' </script>";
			}
			else
			{

				if ($pass == $pass_r) {
					$insertado = mysql_query("INSERT INTO usuarios (id_user,nick_name,nombre,apellido,pass,pass_r,correo,fecha,perfil) 
												VALUES ('', '".$nick."' ,'".$nombre."','".$apellido."','".$encrip."','".$encrip_r."','".$correo."','".date("Y-m-d" )."','".$perfil."');");
				echo "<script>alert('Usuario Registrado con Exito')</script>";
				echo "<script>location.href='../../webMaster.php'</script>";
				}
				else
				{
					echo "<script>alert('Las Contraseñas no coinciden')</script>";
					echo "<script>location.href = 'agregar.php' </script>";
				}

			}

	}
		else
		{
			echo "<script>alert('Olvido el Perfil del Usuario!!')</script>";
			echo "<script>location.href = 'agregar.php' </script>";
		}


?>