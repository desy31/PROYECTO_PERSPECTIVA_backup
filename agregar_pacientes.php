<?php
    include ("conexion.php");
    include ("validar_login.php");


	if (isset($_POST['nombre']) && isset($_POST['sexo']) && isset($_POST['identidad']) && isset($_POST['fecha'])  && isset($_POST['telefono'])) {
		$accion = "";
		$es_admin = $_SESSION["usuario_actual_rol"] === 'admin';

		if ($es_admin && isset($_POST['Guardar'])) {
			$accion = "Ingresado";
            $sql = "INSERT INTO pacientes(nombre,edad, estado_civil,telefono, direccion,identidad,fecha_nacimiento,nacionalidad,sexo)  VALUES ('".$_POST['nombre']."','".$_POST['edad']."','".$_POST['estadocivil']."','".$_POST['telefono']."','".$_POST['direccion']."','".$_POST['identidad']."','".$_POST['fecha']."','".$_POST['nacionalidad']."','".$_POST['sexo']."')";

		}
		if (mysqli_query($con, $sql)) {
			echo "<script>
			location.replace('datos_generales.php');
			</script>";
		}else{
			echo "<script> alert('Error al '".$accion."' usuario');</script>";
		}

	}else if (isset($_GET['id_paciente'])) {
		$accion = "Eliminado";
			$sql = "DELETE FROM `pacientes` WHERE id_paciente = '".$_GET['id_paciente']."'";
		if (mysqli_query($con, $sql)) {
			echo "<script>
				alert('Usuario '".$accion."'');</script>";
		}else{
			echo "<script> alert('Error al '".$accion."' usuario');</script>";
		}
		echo "<script>
			location.replace('datos_generales.php');
			</script>";
	}
?>