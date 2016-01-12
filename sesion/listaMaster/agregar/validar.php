<meta charset = "UTF-8" />
<?php

	session_start();
	
	require("conectar.php");

	$nick=$_POST['nickname'];
	$pass = $_POST['pass'];
	$encrip = md5 ($pass);

	

	$resul = mysql_query("SELECT * FROM usuarios WHERE nick_name = '$nick' AND pass = '$encrip'");
		if($row = mysql_fetch_array($resul))
			{				
				$role = $row['perfil'];

				switch ($role) {

					case 'admin':
						$_SESSION['logged'] = 'yes';
						$_SESSION['user'] = $row['nombre'];
						$_SESSION['apellido'] = $row['apellido'];
						header('location: ../sesion/admin.php');
						break;

					case 'user':
						$_SESSION['logged'] = 'yes';
						$_SESSION['user'] = $row['nombre'];
						$_SESSION['apellido'] = $row['apellido'];
						header('location: ../sesion/usuario.php');
						break;
						
					case 'master':
						$_SESSION['logged'] = 'yes';
						$_SESSION['user'] = $row['nombre'];
						$_SESSION['apellido'] = $row['apellido'];
						header('location: ../sesion/webMaster.php');
						break;

					case 'inactivo':
						$_SESSION['logged'] = 'yes';
						$_SESSION['user'] = $row['nombre'];
						$_SESSION['apellido'] = $row['apellido'];
						header('location: ../sesion/inactivo.php');
						break;		
				}
			}
			else
			{
				//header('location: ../error/error.html');
				echo "<script>alert('Usuario no Registrado, Verifique sus Datos')</script>";
				echo "<script>location.href='../index.html'</script>";
			}


?>