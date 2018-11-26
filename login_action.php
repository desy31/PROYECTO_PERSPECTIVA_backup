<?php
  include ("conexion.php");
  // include ("validar_login.php");
?>
<?php
  if($_POST['nombre'] && $_POST['password']) { 
    
    $sql="SELECT * FROM usuario WHERE Usuario = '".$_POST['nombre']."' && Password = '".$_POST['password']."'";
     
    $res=mysql_query($sql, $con);
    $row=mysql_fetch_object($res);
    $logged = mysql_num_rows($res);
    if ($logged==0) {
      echo "<script> alert('Usuario o Contraseña incorrectos'); location.replace('LOGI.php'); </script>";
    }else{
      // echo "<script>localStorage.setItem('usuario_actual','".$_POST['nombre']."');</scrip>";
      // localStorage.getItem("usuario_actual");
      // localStorage.removeItem("usuario_actual");
      $_SESSION["usuario_actual"] = $_POST['nombre'];
      $_SESSION["usuario_actual_rol"] = $row->Rol;
      echo "<script>location.replace('principal.php'); </script>";
    }
  }
?>