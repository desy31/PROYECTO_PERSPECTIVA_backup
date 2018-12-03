<?php
  include ("conexion.php");
  include ("validar_login.php");
?>
<html>
<head>
  <title>DENTY</title>
  <meta charset="utf-8">
   <link rel="shortcut icon" href="img\dien.jpg"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/pacientes.js"></script>
  <style type="text/css">
    body {
    margin: 5px auto;
    align-content: center;
    border-radius: 0px;
    border: 0px ;
    width: 100%;
    height: 500px;
    background-image:url("/PROYECTO_PERSPECTIVA_backup/img/uten.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
    }
    
    .usuari {
      font-family: 'Abel', sans-serif;



    }

    .formu{
      font-family: 'Raleway', sans-serif;
    }

    .contenedor {
            width: 70%;
            height: 520px;
            margin: 0 auto;
            border-radius: 1;
            background-color: #04B4AE;
            margin-top: 5px;

        }

      .letras 
         {
            width:100%;
            position: relative;
            left: 30px;

          }

        }

      .tabla
      {
            margin-top: 5px;
            text-align: center;
            width: 80%;
        }

      

         .botones
          {
            position: relative;
            left: 150px;
           }

.muela
          {
            width: 110px;
            height: 110px;
            position: absolute;
            margin-left: 730px;
            margin-top: -60px;

        }

    body section li a
    {
    text-decoration: none;
    color:black;
    size: 18px;
      font-family: 'Abel', sans-serif;
    margin:10px;
    } 

    body section li a:hover
    {
    color:#0B615E;
    } 

    body div section li
    {
    display:inline-block;
    left: 500px;
    position: relative;
    border:1px solid #BDBDBD;
    background: #E6E6E6;
    } 

</style>
</head>

   

<body>
<div class="contenedor">

<section>
<h1  class=" usuari ">Datos Generales</h1>

  
<nav> 
    <ol>
      <li><a href="datos_clinicos.php">Datos Clínicos</a></li>

      <li><a href="diagnostico.php">Diagnóstico</a></li>
      </ol>
    </nav>
 <br>

<article class="formu">
  <form id="formularioPacientes" method="POST" action="agregar_pacientes.php">
      <div  class="letras">
        
        <img  class="muela" src="img\pacientes.png">

     
          Nombre y Apellido: <input type="text" name="nombre" placeholder="Nombre">
          Identidad: <input type="text" name="identidad" placeholder="Identidad" hspace="75">
    
      <br>
          Edad: <input type="text" placeholder="Edad" name="edad" hspace="93">
          Fecha de nacimiento: <input name="fecha" type="date"hspace="2">
      
      <br>
           Estado civil: <input type="text" name="estadocivil" placeholder="Estado civil" hspace="49">
          Nacionalidad: <input type="text" name="nacionalidad"placeholder="Nacionalidad" hspace="5">
      
      <br>
          Telefóno: <input type="text" name="telefono" placeholder="Telefóno" hspace="70">

          Sexo: <select name="sexo" hspace="60"> 
          <option>Masculino</option>
          <option>Femenino</option>
     
          </select>
        <br>
          Dirección: <input type="text" name="direccion" placeholder="Dirección" size=77 hspace="63"> 
<br>
<br>
<br>
<div class="botones">
    <input type="submit" name="Guardar" id="btnGuardar" value="Guardar" style='width:90px; height:35px' >
    <input type="button" name="Limpiar" id="btnLimpiar" value="Limpiar" style='width:90px; height:35px'>
    <input type="button" name="Atras" id="" value="Atras" style='width:90px; height:35px' onclick="location.href = 'principal.php'">

  </div>
  <br>
  <br>
  <br>
  <?php
      $pacientesql = "SELECT * FROM pacientes;";
      // $res = $con->query($sql);
      $response = mysql_query($pacientesql, $con);

    ?>
    <table class="tabla" border="1"  width="85%" bgcolor="white">

<tr>
  <th><strong>Nombre Paciente</strong></th>
  <th><strong>Identidad</strong></th>
  <th><strong>Telefóno</strong></th>
  <th><strong>Eliminar</strong></th>
</tr>
 
<?php
       if (!$response) {
         die("mySQL error: ". mysql_error());
       }else{
        while ($row = mysql_fetch_object($response)) {
          echo '
            <tr>
              <td>'.$row->nombre.'</td>
              <td>'.$row->identidad.'</td>
              <td>'.$row->telefono.'</td>
              <td><a href="agregar_pacientes.php?id_paciente='.$row->id_paciente.'">Borrar</a></td>
            </tr>
          ';
        }
       }
       ?>


</table>
    <br>
    <br>
   
 </div>
  </form>
</article>
</section>

</div>

</body>

