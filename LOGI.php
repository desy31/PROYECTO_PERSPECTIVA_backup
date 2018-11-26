<?php include("conexion.php") ?>

<!DOCTYPE html>
<html>
<head>
  <title>DENTY</title>
   <link rel="shortcut icon" href="img\dien.jpg"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="estilos/login.css">
   <link href="https://fonts.googleapis.com/css?family=Abel|Archivo|Pacifico|Raleway" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans+Condensed:300" rel="stylesheet">
</head>
<body>

<H1 class="titulo">DENTY</H1>
    <section class="login">
        <h1>Registro de seguridad</h1>

        <article class="formu">
          <form method="POST" action="login_action.php">
             Nombre de usuario <br>
             <input type="text" name="nombre" placeholder="Nombre" required><br><br>
             Contraseña <br>
             <input type="password" name="password" placeholder="Contraseña" required><br><br><br>
             <input type="submit" value="Entrar">
          </form>
          <img src="img\int.jpg">
        </article>       
    </section>

</body>
</html>