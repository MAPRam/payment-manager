<?php

  //
  // RESPONDE A APP.JS
  //

  require_once '../../conexion/conexion.php';
  $conexion = conexion();

  $year = date("Y");
  $month = date("m");

  $query1 = 'SELECT count(folio) as total FROM cheques WHERE estado=1 AND MONTH(fecha_cheque)= '.$month.' AND YEAR(fecha_cheque)='. $year;
  $datos = mysqli_fetch_assoc($conexion->query($query1));

  $query2 = 'SELECT count(folio) as total2 FROM cheques WHERE estado=2 AND MONTH(fecha_cheque)= '.$month.' AND YEAR(fecha_cheque)='. $year;
  $datos2 = mysqli_fetch_assoc($conexion->query($query2));

  $query3 = 'SELECT count(folio) as total3 FROM cheques WHERE  MONTH(fecha_cheque)= '.$month.' AND YEAR(fecha_cheque)='. $year;
  $datos3 = mysqli_fetch_assoc($conexion->query($query3));

  $query4 = 'SELECT count(id_persona) as total4 FROM persona';
  $datos4 = mysqli_fetch_assoc($conexion->query($query4));

  $res = $datos["total"] . " " . $datos2["total2"] . " " . $datos3["total3"]. " " . $datos4["total4"];

  echo json_encode($res);


?>
