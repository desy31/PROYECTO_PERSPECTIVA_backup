<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	unset($_SESSION["usuario_actual"]);
	echo "<script> window.location.href='LOGI.php';</script>";
?>