<?php
  include ("conexion.php");
  include ("validar_login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>DENTY | <?php echo $_SESSION["usuario_actual"] ?></title>
	 <link rel="shortcut icon" href="img\dien.jpg"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="estilos/es.css">
   <link href="https://fonts.googleapis.com/css?family=Abel|Archivo|Pacifico|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>
<body>

 <header>
   <h1>Denty</h1>
   <img  class="logo"src="img\blanco.png">
	<nav> 
	  <ol>
      <?php
      if($_SESSION["usuario_actual_rol"]=="admin")
      {
	    echo'<li><img src="img\doc.png"/><a href="usuarios.php">Usuario</a></li>';
      }

?>
	    <li><img src="img\pacientes.png"/><a href="datos_generales.php">Pacientes</a></li>

	    <li><img src="img\agenda.png"/><a href="fechaconsulta.php">Agenda</a></li>

	    <li><img src="img\cita.png"/><a href="agendacitas.php">Cita</a></li>

	    <li><img src="img\cerrar.png"/><a href="logout.php">Cerrar Sesión de <?php echo $_SESSION["usuario_actual"] ?> | <?php echo $_SESSION["usuario_actual_rol"] ?></a></li>
      </ol>
    </nav>
  </header>

<section>
    <article>
  
	<form>
		 <label class="segundo">Pacientes por atender a la fecha</label>
          <input type="date" name="fecha">
	</form>

<table>
	<tr>
	  <th>Nombre</th>
      <th>Telefono</th>
      <th>Fecha</th>
      <th>Hora</th>
      <th>Doctor</th>
   </tr>
    
    <tr>
    	<td>Ingrid Silva</td>
    	<td>255-5555</td>
    	<td>15-11-2018</td>
    	<td>2</td>
    	<td>Carlos Martinez</td>
    </tr>
 <tr>
    	<td>1</td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    </tr>

 <tr>
    	<td>#</td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    </tr>
 <tr>
    	<td>1</td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    </tr>
<tr>
      <td>1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

</tr>
</table>
<h1 class="den">Clínica Denty</h1>
<h2 class="sub">Especialistas en tus dientes</h2>
<img  class="muela" src="img\deny.png">

</article>


<aside>
  <img  class="diente" src="img\sonri.jpg">
</aside>


</section>



</body>
</html>