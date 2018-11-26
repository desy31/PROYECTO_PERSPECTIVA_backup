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
            width: 700px;
            height: 800px;
            margin: 0 auto;
            border-radius: 1;
            padding: 1em;
            background-color: #04B4AE;

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

        .boca
          {
            width: 250px;
            height: 250px;
            position: absolute;
            margin-left: 10px;
            margin-top: -10px;

        }

         .botones
          {
            position: relative;
            left: 50px;
           }

           .muela
          {
            width: 100px;
            height: 100px;
            position: absolute;
            margin-left:110px;
            margin-top: -130px;

        }


    </body>

  </style>
</head>

   

<body>
<div class="contenedor">

<section>
  
 <h1  class=" usuari " align=center>Diagnóstico</h1>

<article class="formu">
  <form>
      <div  class="letras">
        
    Paciente <select name="pacientes" style="width:200;">

<option>1</option>
<option>2</option>
<option>3</option>
</select>
<br>  
 Pieza<select name="pacientes" style="width:130;">
<option>Elegir Pieza</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>

</select>
    <br>
    <br>
    <br>
       <strong> Diagnóstico </strong><br> 
       <textarea name="Diagnóstico" rows=15 cols=50></textarea>
        <img  class="muela" src="img\pacientes.png">
     
      <img class="boca" src="img\boca1.jpg" >
      <br>  
      <strong>TRATAMIENTO</strong>
    <br> 
    <br>  
      Extracciones dentales..................Lps. 200.00
      <br>
  
      Limpiezas bucales........................Lps. 500.00
      <br>
      
      Obstrucciones con resina.............Lps. 300.00
      <br>
    
      Aplicación de Flúor.......................Lps. 700.00
      <br>
    
      Tratamientos de emergencia........Lps. 1,200.00
      <br>
  
      Consulta/Diagnóstico...................lps.500
      
      <br>
      Charlas de Higiene Bucal.............Gratis
    <br>
    
    
<br>
     <table border="1"  width="50%" bgcolor="white">
<tr>
  <td><strong>Nombre</strong></td>
  <td><strong>ID</strong></td>
  <td><strong>Pieza dental</strong></td>
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