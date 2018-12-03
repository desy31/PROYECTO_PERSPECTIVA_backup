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
            height: 600px;
            margin: 0 auto;
            border-radius: 1;
            padding: 1em;
            background-color: #04B4AE;

        }

      .letras 
         {
            width:100%;
            position: relative;
            left: 80px;
          }

        }

      .tabla
      {
            margin-top: 5px;
            text-align: center;
            width: 80%;
        }

        .muela
          {
            width: 110px;
            height: 110px;
            position: absolute;
            margin-left: 700px;
            margin-top: -50px;

        }

         .botones
          {
            position: relative;
            left: 150px;
           }

  </style>
</head>

   

<body>
<div class="contenedor">

<section>
  
 <h1  class=" usuari " align=center> Gestión de Usuarios</h1>

<article class="formu">
  <form method="POST" action="agregar_usuario.php">
      <div  class="letras">
        <img  class="muela" src="img\doc.png">
    Id <input type="text" name="idusuario" placeholder="Código">

   &nbsp;&nbsp;&nbsp; 
   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Fecha<input type="date" >
    <br>
    <br>
    <br>


   <table>

    <tr>
          <td>Nombre y Apellido: <input type="text" name="nombre" placeholder="Nombre" hspace="8"></td> 

          <td>Identidad: <input type="text" name="identidad" placeholder="Indentidad" hspace="75"></td>
     </tr> 
       
      <tr>
           <td>Telefono:  <input type="text" name="telefono" placeholder="Telefono"hspace="79"></td>
          
           <td>Fecha de Ingreso <input type="date" name="fecha" placeholder="Fecha" hspace="22" style="width: 173px;"></td>
      </tr>
      
      <tr>
           <td>Estado:  <input type="text" name="estado" placeholder="Estado"hspace="89"> </td>
           
           <td>Nivel de Privilegio: <select name="rol"> 
           <option value="admin">admin</option>
           <option value="normal">normal</option>
           </select></td>
       </tr>
       <tr>
           <td>Usuario: <input type="text" name="usuario" placeholder="Usuario"hspace="85"></td>
            
           <td>Contraseña:  <input type="password" name="password" placeholder="Contraseña"hspace="56"></td>
        </tr>
</tr>
    </table>
    <br>
    <br>

   <div class="botones">
    <input type="submit" name="Guardar" value="Guardar" style='width:90px; height:35px' >
    <input type="submit" name="Modificar" value="Modificar"style='width:90px; height:35px' >
    <input type="submit" name="Eliminar" value="Eliminar"style='width:90px; height:35px' >
    <input type="button"id="limpiarbtn" name="Limpiar" value="Limpiar" style='width:90px; height:35px'>
    <input type="button" name="Atras" value="Atras" style='width:90px; height:35px' onclick="location.href = 'principal.php'">

  </div>
    <br>
    <br>

    <?php
      $sql = "SELECT * FROM usuario;";
      // $res = $con->query($sql);
      $res = mysqli_query($sql, $con);

    ?>

    <table class="tabla" border="1"  width="85%" bgcolor="white">
      <tr>
        <th><strong>ID</strong></th>
        <th><strong>Nombre Usuario</strong></th>
        <th><strong>Usuario</strong></th>
        <th><strong>Identidad</strong></th>
        <th><strong>Estado</strong></th>
        <th><strong>Fecha de Ingreso</strong></th>
        <th><strong>Telefono</strong></th>
        <th><strong>Rol</strong></th>
        <th><strong>Borrar</strong></th>
      </tr>
       
       <?php
       if (!$res) {
         die("mySQL error: ". mysqli_error());
       }else{
        while ($row = mysqli_fetch_object($res)) {
          echo '
            <tr>
              <td>'.$row->IdUsuario.'</td>
              <td>'.$row->Nombre.'</td>
              <td>'.$row->Usuario.'</td>
              <td>N/A</td>
              <td>N/A</td>
              <td>N/A</td>
              <td>'.$row->Telefono.'</td>
              <td>'.$row->Rol.'</td>
              <td><a href="agregar_usuario.php?idusuario='.$row->IdUsuario.'">Borrar</a></td>
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
  <script>
    var btn = document.querySelector('#limpiarbtn');
    var actualForm = document.getElementsByTagName('form')[0];
    btn.addEventListener('click',function(e){
      
      actualForm.reset();
    })
  </script>
</body>

