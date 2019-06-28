<?php

  $id = $_POST["folio"];
  $persona = $_POST["persona"];

  include_once '../../conexion/conexion.php';
  $conexion = conexion();

  $fecha = getdate();
  $anio = $fecha["year"];
  $mes = date("m");
  $dia = date("d");
  $fecha2 = $anio . "-" . $mes . "-". $dia . " " . $fecha["hours"] . ":" . $fecha["minutes"];

  $query1 = 'UPDATE cheques SET estado=1, fecha_pagado="'.$fecha2.'"  WHERE folio=' .$id . ' AND id_persona='.$persona;

  //echo json_encode($query1);

  if ($conexion->query($query1))
  {
      mysqli_close($conexion);
      echo json_encode('hecho');
  }
  else
  {
      mysqli_close($conexion);
      echo json_encode('error');
  }

?>
