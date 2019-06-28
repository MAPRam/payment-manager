<?php

  $user = $_POST["usuario"];
  $password = $_POST["password"];

  if ($user == "" || $password == "")
  {
    echo json_encode('nodata');
  }
  else
  {
    require_once 'cifrado/val.php';
    require_once 'conexion/conexion.php';
    $conexion = conexion();

    $key = cifra($password, llave());

    $query = 'SELECT * from usuario WHERE correo="'.$user.'" AND password="'.$key.'"';
    $result = $conexion->query($query);

    if ($result->num_rows > 0)
      {
          $row = $result->fetch_array(MYSQLI_ASSOC);
          if (($user == $row["correo"]) && $key == $row["password"] )
          {
              session_start();

              $_SESSION['payment'] = true;
              $_SESSION['usuario'] = $row["nombre"];
              $_SESSION['correo'] = $row["correo"];
              $_SESSION['avatar'] = $row["avatar"];
              $_SESSION['apellidop'] = $row["apellidop"];
              $_SESSION['puesto'] = $row["puesto"];
              $_SESSION['tipo_usuario'] = $row["tipo_usuario"];
              $_SESSION['id_user'] = $row["id_user"];
              //$_SESSION['start'] = time();
              //$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
              mysqli_close($conexion);
              echo json_encode('login');
              //header("Location: administrador/");
          }

      }

      else
      {
          mysqli_close($conexion);
          echo json_encode('nomatch');
          // echo'<script type="text/javascript">alert("Usuario o contraseña incorrectos, intenta otra vez");
          // window.location.href="index.php";
          // </script>';
      }
  }



 ?>
