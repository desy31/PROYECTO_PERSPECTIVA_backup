<? include ( "conexion.php " ) ? >

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conexion de Base de datos</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/D69A43F8-FDFF-FA4C-ABF2-B633FE580D17/main.js" charset="UTF-8"></script></head>

<body>
<center>
<form action ="insertar.php" method="post" name="form">
<label for="dir">Nombre del Usuario</label>
<input type ="nombre" name ="nombre"/><br /><br />
<label for="dir">Password</label>
<input type ="password" name ="pw"/><br /><br />
<input type="submit" value="Insertar Datos" class="btn btn-success" name="btn1">
</form>
</center>
</body>
</html>