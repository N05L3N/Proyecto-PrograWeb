<meta charset = "UTF-8" />
<?php
	require("../../../php/conectar.php");

		$id = $_POST['id_user'];
		$nick = $_POST['nick_name'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$perfil = $_POST['perfil'];

	if ($perfil != "error") {
		//UPDATE usuarios SET nick_name='$nick', nombre='$nombre', apellido='$apellido', pass='$pass', pass_r='$pass_r', correo='$correo' WHERE id_user='$id'
		$resul = mysql_query("UPDATE usuarios SET nick_name='$nick', nombre='$nombre', apellido='$apellido', correo='$correo', perfil='$perfil' WHERE id_user='$id'");
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
		    		echo "<script>alert('Seleccione el Perfil del Usuario!!')</script>";
					echo "<script>location.href='modificar.php?id=" . $id . "'</script>";
			}



?>