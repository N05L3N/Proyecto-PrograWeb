<meta charset = "UTF-8" />
<?php
	require("../../../php/conectar.php");

		$id = $_POST['id_user'];
		$nick = $_POST['nick_name'];



		$pass = $_POST['pass'];
			$encrip = md5 ($pass);

		$pass_r = $_POST['pass_r'];
			$encrip_r = md5 ($pass_r);


	if ($encrip == $encrip_r) {
		//UPDATE usuarios SET nick_name='$nick', nombre='$nombre', apellido='$apellido', pass='$pass', pass_r='$pass_r', correo='$correo' WHERE id_user='$id'
		$resul = mysql_query("UPDATE usuarios SET  pass='$encrip', pass_r='$encrip_r' WHERE id_user='$id'");
			if($resul == 1)
				{				
					echo "<script>alert('Usuario Modificado con Exito')</script>";
					echo "<script>location.href='../lista.php'</script>";
				}
				else
				{
					echo "<script>alert('Error al Modificar el Usuario')</script>";
					echo "<script>location.href='../lista.php'</script>";
				}
		}
			else
		    {
		    		echo "<script>alert('Contraseñas Diferentes!!')</script>";
					echo "<script>location.href='modificaPass.php?id=" . $id . "'</script>";
			}



?>