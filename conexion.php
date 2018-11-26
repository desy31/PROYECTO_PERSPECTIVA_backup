<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="clinica_dental";
	$error_msg = false;

	// Create connection
	$con = mysql_connect($servername, $username, $password);

	// Check connection
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	mysql_select_db($db, $con);
?>