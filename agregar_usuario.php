<?php
  include ("conexion.php");
  include ("validar_login.php");
?>
<?php
	if ($_POST['nombre'] && $_POST['usuario'] && $_POST['password'] && $_POST['rol']) {
		$accion = "";

		if ($_SESSION["usuario_actual_rol"] === 'admin' && isset($_POST['Guardar'])) {
			$accion = "Ingresado";
			$sql = "INSERT INTO usuario (`IdUsuario`, `Usuario`, `Password`, `Rol`, `Nombre`) VALUES (NULL,'".$_POST['usuario']."','".$_POST['password']."','".$_POST['rol']."','".$_POST['nombre']."')";
		}else if ($_SESSION["usuario_actual_rol"] === 'admin' && isset($_POST['Modificar'])) {
			$accion = "Modificado";
			$sql = "UPDATE `usuario` SET `IdUsuario`='".$_POST['idusuario']."',`Usuario`='".$_POST['usuario']."',`Password`='".$_POST['password']."',`Rol`='".$_POST['rol']."',`Nombre`='".$_POST['nombre']."' WHERE IdUsuario = '".$_POST['idusuario']."'";
		}

		if (mysql_query($sql, $con)) {
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