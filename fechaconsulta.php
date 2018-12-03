<html>
<head>
  <title>DENTY</title>
  <meta charset="utf-8">
   <link rel="shortcut icon" href="img\dien.jpg"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style type="text/css">

    body {
    margin: 50 auto;
    align-content: center;
    border-radius: 0px;
    border: 0px ;
    width: 600px;
    height: 500px;
    background-image:url("/img/uten.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
    }
    
    .histcitas h1{
      font-family: 'Abel', sans-serif;
    }

    .histcitas .historialcitas{
      font-family: 'Raleway', sans-serif;
    }

    div {
            width: auto;
            margin: 0 auto;
            border-radius: 1;
            padding: 1em;
            background-color: #04B4AE;

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
            margin-left: 140px;
            margin-top: -80px;

        }
    </body>


  </style>
</head>

   
<center>
<body>
<div>

    <h2 class="titulo">AGREGAR CITA</h2>
          <p class="sub-titulo">FECHA PARA PROXIMA CITA</p>
          <img  class="muela" src="img\agenda.png">

<section class="consultas">
  
<article class="historialconsultas">
  <form>
   <p>Paciente <select id="lista" name="List_pac" =>
          <option>Elegir Paciente</option> 
        </select></p>
        
      Fecha:
        <input type="date" name="fecha" min="2018-11-20">
                                  
  
      Hora:
          <input type="time" name="hora" min="07:00"
                                 max="16:00" step="3600">

      Doctor: <select id="lista" name="List_pac" =>
          <option>Elegir Doctor</option>
          
        </select></p>

    <br>
    <br>
    <strong>CONSULTAS</strong>
    <br>  
    <br>  

    <input type="submit" name="boton" value="Guardar" style='width:90px; height:35px' > 
    <input type="submit" name="boton" value="Modificar" style='width:90px; height:35px' >
    <input type="submit" name="boton" value="Eliminar" style='width:90px; height:35px' > 
    <input type="submit" name="boton" value="Limpiar" style='width:90px; height:35px' > 
    <input type="button" name="Atras" value="Atras" style='width:90px; height:35px' onclick="location.href = 'principal.php'">

    <br>  
    <br>  
    <table border="1"  width="50%" bgcolor="white">
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>Fecha</strong></td>
  <td><strong>Hora</strong></td>
  
</tr>
 
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  

</tr>
 
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  
</tr>
 
<tr>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  
</tr>

</table>
<br>
    <br>


</table>

    <br>
    <br>
    
  </form>
</article>
</section>

</div>

</body>
</center>
 </html>  