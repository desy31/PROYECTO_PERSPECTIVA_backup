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
    background-image: url("/PROYECTO_PERSPECTIVA_backup/img/uten.jpg");
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
            height: 420px;
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
            width: 250px;
            height: 250px;
            position: absolute;
            margin-left: 600px;
            margin-top: -50px;

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
    </body>
    

  </style>
</head>

   

<body>

<div class="contenedor">

<section>
  
 <h1  class=" usuari " align=center>Datos Clínicos</h1>

<article class="formu">
  <form>
      <div  class="letras">
      <img  class="muela" src="img\pacientes.png">
 Paciente <select name="pacientes" style="width:200;">

<option>1</option>
<option>2</option>
<option>3</option>
</select>

    <br>
    <br>


<strong>¿Ha recibido o padece alguna de las siguientes enfermedades?</strong>
<br>
    <table class="tabla" border="0"  width="85%" bgcolor=#04B4AE>
<tr>
  <td>Anemia<input type="checkbox" hspace="10"></td>
  <td>Leucemia<input type="checkbox" hspace="11"></td>
  <td>Diabetes<input type="checkbox" hspace="10"></td>
</tr>
 
<tr>  
  <td>Artritis<input type="checkbox" hspace="18"></td>
  <td>Gastritis<input type="checkbox" hspace="21"></td>
  <td>VIH/SIDA<input type="checkbox"></td>
</tr>
 
<tr>
  
  <td>Sinusitis<input type="checkbox"></td>
  <td>Amigdalitis<input type="checkbox"></td>
  <td>Otros<input type="text"></td>
</tr>
</table>
    <br>
    <br>

    <strong>Antecedentes personales no patológicos</strong>
<br>
    <table class="tabla" border="0"  width="85%" bgcolor=#04B4AE>
<tr>
  <td>¿Fuma?<input type="checkbox"hspace="100"></td>
  <td>¿Toma mucho refresco?<input type="checkbox"></td>
  <td>¿Usa drogas?<input type="checkbox"></td>
</tr>
 
<tr>  
  <td>¿Está embarazada?<input type="checkbox" hspace="13"></td>
  <td>¿Muerde objetos duros?<input type="checkbox"></td>
  <td>¿Utiliza respirador bucal?<input type="checkbox"></td>
</tr>
 
<tr>
  <td>¿Ha visitado al odontólogo?<input type="checkbox"></td>
  <td>¿Ha sido anestesiado?<input type="checkbox" hspace="12"></td>
  <td>¿Hubo algún problema con la anestesia?<input type="checkbox"></td>
</tr>
 

</table>
    <br>
    <br>
 <div class="botones">
    <input type="button" name="Guardar" value="Guardar" style='width:90px; height:35px' >
    <input type="button" name="Modificar" value="Modificar"style='width:90px; height:35px' >
    <input type="button" name="Eliminar" value="Eliminar"style='width:90px; height:35px' >
    <input type="button" name="Limpiar" value="Limpiar" style='width:90px; height:35px'>
    <input type="button" name="Atras" value="Atras" style='width:90px; height:35px' onclick="location.href = 'datos_generales.php'">

  </div>
    <br>
    <br>
   
 </div>
  </form>
</article>
</section>

</div>

</body>