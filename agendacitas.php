<html>
<head>
  <title>DENTY</title>
  <meta charset="utf-8">
   <link rel="shortcut icon" href="img\dien.jpg"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style type="text/css">
    


    body 

    {
    margin: 50 auto;
    align-content: center;
    border-radius: 0px;
    border: 0px ;
    width: 600px;
    height: 500px;
    background-image:url("/PROYECTO_PERSPECTIVA_backup/img/uten.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
    }
    
    body .tablas
    {
      font-family: 'Abel', sans-serif;

    }


    .histcitas h1{
     font-family: 'Raleway', sans-serif;
    }

    .histcitas .historialcitas{
      font-family: 'Raleway', sans-serif;
    }

  .usuari {
     font-family: 'Raleway', sans-serif;

    }

    div {
            width: 130%;
            margin-left: -100px;
            border-radius: 1;
            padding: 1em;
            background-color: #04B4AE;
            font-family: 'Raleway', sans-serif;
            margin-top: -35px;
        }

   .titulo
   {
            font-family: 'Abel', sans-serif;
      
    }
   

    .muela
          {
            width: 100px;
            height: 100px;
            position: absolute;
            margin-left:350px;
            margin-top: -160px;

        }


  </style>
</head>
</body> 

<body>
<div class="contenedor">

<section class="consultas">
  
<article class="historialconsultas">
  <form>


  	<h1  class=" usuari "> Agendar Cita</h1>
  	<p class="sub-titulo">Agendar cita para pacientes</p>

   Paciente<select id="lista" name="List_pac" =>
		<option>Elegir Paciente</option>
		</select>
		<br>

		Fecha:
  			<input type="date" name="fecha" min="2018-11-20">
                  <br>                
  
  	Hora:
  				<input type="time" name="hora" min="07:00"
                                 max="16:00" step="3600">
                                 <br>
    <br>
    <br>
    <strong>Agenda Médica Para Pacientes</strong>

    <img  class="muela" src="img\agenda.png">
 
<table border="1"  width="100%" bgcolor="white">
<tr>
  <th><strong>Nombre</strong></th>
  <th><strong>Fecha</strong></th>
  <th><strong>Hora</strong></th>
  <th><strong>Estado</strong></th>
</tr>
 
<tr>
	 <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>

</tr>
 
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
   <td>0</td>
</tr>
 
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
   <td>0</td>
</tr>

</table>
<br>
<strong>Agenda Paciente-Médico</strong>

<table  border="1"  width="100%" bgcolor="white">
<tr>
  <th><strong>Fecha</strong></th>
  <th><strong>Hora</strong></th>
  <th><strong>Medico</strong></th>
  <th><strong>Estado</strong></th>
  <th><strong>ID</strong></th>
  <th><strong>Paciente</strong></th>
  <th><strong>Telefono</strong></th>
</tr>
 
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>

</tr>
 
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>

</tr>
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>

</tr>
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>

</tr>
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>

</tr>
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>

</tr>
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>

</tr>

</table>

    <br>
    <form>  
    <input type="submit" name="boton" value="Guardar" style='width:90px; height:35px' > 
    <input type="submit" name="boton" value="Eliminar" style='width:90px; height:35px' > 
     <input type="button" name="Atras" value="Atrás" style='width:90px; height:35px' onclick="location.href = 'principal.php'">
  </form>
  </div>
</article>
</section>

</div>

</body>
</center>
 </html>  