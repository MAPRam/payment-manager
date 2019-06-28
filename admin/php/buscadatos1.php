<?php
  include_once '../../conexion/conexion.php';
  $conexion = conexion();
  $folio = $_POST["folio"];
  $query1 = 'SELECT folio, id_persona, importe, cuenta, concepto, estado, incidente, fecha_cheque, fecha_pagado FROM cheques where folio='.$folio;

  $datos = $conexion->query($query1);

  $response = array();

  while ($rs = mysqli_fetch_assoc($datos))
  {

    $response["datacheque"] = $rs;

    $pers = 'SELECT * from persona where id_persona='. $rs["id_persona"];
    $pr = mysqli_fetch_assoc($conexion->query($pers));
    $response["persona"] = $pr;
  }

  mysqli_close($conexion);
  echo json_encode($response);

?>
