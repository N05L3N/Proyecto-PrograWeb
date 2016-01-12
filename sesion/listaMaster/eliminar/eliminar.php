            <?php
            	include("../../../php/conectar.php");

            	$id=$_GET['id'];
            	$resul = mysql_query("DELETE FROM usuarios WHERE id_user = '$id'");

            	if($resul > 0)
			{				
				echo "<script>alert('Usuario Eliminado con Exito')</script>";
				echo "<script>location.href='../lista.php'</script>";
			}
			else
			{
				echo "<script>alert('Error al Eliminar el Usuario')</script>";
				echo "<script>location.href='../lista.php'</script>";
			}

            ?>

