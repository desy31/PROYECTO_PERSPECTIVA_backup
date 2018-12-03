<?php
  include ("conexion.php");
  include ("encrypt_password.php");

  // include ("validar_login.php");
  
?>
<?php
  if($_POST['nombre'] && $_POST['password']) { 

    $encpassword =encrypt_decrypt($_POST['password'],true);
    
    $sql="SELECT * FROM usuario WHERE Usuario = '".$_POST['nombre']."' && Password = '".$encpassword."'";
    $res=mysqli_query($con, $sql);
    $row = mysqli_fetch_object($res);
    $logged = mysqli_num_rows($res);
    if ($logged==0) {
      echo "<script> alert('Usuario o Contraseña incorrectos'); location.replace('LOGI.php'); </script>";
    }else{
 
      $_SESSION["usuario_actual"] = $_POST['nombre'];
      $_SESSION["usuario_actual_rol"] = $row->Rol;
      echo "<script>location.replace('principal.php'); </script>";
    }
  }
?>