<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conexion Base de datos</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/D69A43F8-FDFF-FA4C-ABF2-B633FE580D17/main.js" charset="UTF-8"></script></head>
<?php
include("conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['pw']) && !empty($_POST['pw']))
{
$con=mysql_connect($host,$user,$pw)or die("problemas al conectar");
mysql_select_db($db,$con) or die("problemas al conectar la base de datos");

mysql_query("INSERT INTO datos (NOMBRE,PW) VALUEs ('$_POST[nombre]','$_POST[pw]')",$con);
echo "datos insertados";
}else{
echo "problemas al insertar datos";
}

?>
<body>
</body>
</html>