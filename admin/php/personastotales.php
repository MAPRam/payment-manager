<?php
  include_once '../../conexion/conexion.php';
  $conexion = conexion();
  //$year = date("Y");
  //$month = date("m");


  $q1 = 'SELECT * FROM persona order by id_persona desc';
  //echo $q1;
  $resultado = $conexion->query($q1);
  $response = array();

  while ($rs = mysqli_fetch_assoc($resultado))
  {
    $response[] = $rs;

  }

  mysqli_close($conexion);
  echo json_encode($response);

?>
