<?php
  include ("conexion.php");
  include ("validar_login.php");
  include ("encrypt_password.php");

?>

<!-- proceso para hacer funcionar los botones-->
<?php
	if (isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['rol'])  && isset($_POST['telefono'])) {
		$accion = "";
		$es_admin = $_SESSION["usuario_actual_rol"] === 'admin';
		$encpassword = encrypt_decrypt($_POST['password'],true);

		if ($es_admin && isset($_POST['Guardar'])) {
			$accion = "Ingresado";
			$sql = "INSERT INTO `usuario`(`IdUsuario`, `Usuario`, `Password`, `Rol`, `Nombre`, `Telefono`,`fechaingreso`,`identidad`) VALUES (NULL,'".$_POST['usuario']."','".$encpassword."','".$_POST['rol']."','".$_POST['nombre']."','".$_POST['telefono']."','".$_POST['fecha']."','".$_POST['identidad']."')";

		}else if ($es_admin && isset($_POST['Modificar'])) {
			$accion = "Modificado";
			$sql = "UPDATE `usuario` SET `IdUsuario`='".$_POST['idusuario']."',`Usuario`='".$_POST['usuario']."',`Password`='".$encpassword."',`Rol`='".$_POST['rol']."',`Nombre`='".$_POST['nombre']."' WHERE IdUsuario = '".$_POST['idusuario']."'";

		}else if ($es_admin && isset($_GET['idusuario'])) {
			$accion = "Eliminado";
			$sql = "DELETE FROM `usuario` WHERE IdUsuario = '".$_GET['idusuario']."'";
		}

		if (mysqli_query($con, $sql)) {
			echo "<script>
				alert('Usuario '".$accion."'');</script>";
		}else{
			echo "<script> alert('Error al '".$accion."' usuario');</script>";
		}
		echo "<script>
			location.replace('usuarios.php');
			</script>";

	}else if (isset($_GET['idusuario'])) {
		$accion = "Eliminado";
			$sql = "DELETE FROM `usuario` WHERE IdUsuario = '".$_GET['idusuario']."'";
		if (mysqli_query($con, $sql)) {
			echo "<script>
				alert('Usuario '".$accion."'');</script>";
		}else{
			echo "<script> alert('Error al '".$accion."' usuario');</script>";
		}
		echo "<script>
			location.replace('usuarios.php');
			</script>";
	}
?>