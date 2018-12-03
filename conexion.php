<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	$servername = "167.99.255.6";
	$username = "root";
	$password = "sandals01";
	$db="clinica_dental";
	$error_msg = false;

	// Crear conexion 
	$con = mysqli_connect($servername, $username, $password,$db);

	// revisa conexion
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	// mysqli_select_db($con, $db);
?>