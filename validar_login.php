<?php
	include ("conexion.php");
	if(!isset($_SESSION["usuario_actual"])){
		echo "<script> window.location.href='LOGI.php';</script>";
	}
?>
<!-- <a href="/PROYECTO_PERSPECTIVA_backup/">HOME</a></br> -->
<!-- <a href="logout.php">LOG OUT</a></br> -->