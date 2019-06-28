<?php

  include_once '../../conexion/conexion.php';
  $conexion = conexion();
  $year = date("Y");
  $month = date("m");

  $q1 = 'SELECT cheques.folio, cheques.importe, cheques.estado, cuentas.concepto, cheques.fecha_cheque, cheques.fecha_pagado, concat(persona.nombre, " ", persona.apellidop, " ", persona.apellidom) as nombre from cheques, persona, cuentas where ';
  $q2 = 'cheques.id_persona=persona.id_persona AND cheques.cuenta=cuentas.cuenta and MONTH(fecha_cheque)= '.$month.' AND YEAR(fecha_cheque)='. $year.' order by cheques.folio desc';
  $q3 = $q1 . $q2; // 'SELECT * from cheques where MONTH(fecha_cheque)= '.$month.' AND YEAR(fecha_cheque)='. $year;
  //echo $q1;
  $resultado = $conexion->query($q3);
  $response = array();

  while ($rs = mysqli_fetch_assoc($resultado))
  {
    $response[] = array_map('utf8_encode', $rs);
  }

  mysqli_close($conexion);
  echo json_encode($response);


?>
