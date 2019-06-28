<?php
  $id = $_POST["id"];

  include_once '../conexion/conexion.php';

  $conexion = conexion();

  $update = 'UPDATE cheques SET estado=2 WHERE folio='.$id;


  if ($conexion->query($update))
  {
    mysqli_close($conexion);
    echo json_encode('1');
  }
  else
  {
    mysqli_close($conexion);
    echo json_encode('0');
  }




?>
