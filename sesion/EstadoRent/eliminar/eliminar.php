            <?php
            	include("../../../php/conectar.php");

            	$id=$_GET['id'];
            	$resul = mysql_query("DELETE FROM upload WHERE id = '$id'");

            	if($resul > 0)
			{				
				echo "<script>alert('Pelicula Eliminada con Exito')</script>";
				echo "<script>location.href='../Rentas.php'</script>";
			}
			else
			{
				echo "<script>alert('Error al Eliminar la Pelicula')</script>";
				echo "<script>location.href='../Rentas.php'</script>";
			}

            ?>

