<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	unset($_SESSION["usuario_actual"]);
	unset($_SESSION["usuario_actual_rol"]);
	echo "<script> window.location.href='LOGI.php';</script>";

?>