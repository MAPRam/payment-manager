<?php

  include_once '../../conexion/conexion.php';
  $conexion = conexion();

  $year = date("Y");
  $month = date("m");

  $q1 = 'SELECT cheques.folio, cheques.importe, cheques.incidente, cheques.estado, cuentas.concepto, cheques.fecha_cheque, cheques.fecha_pagado, concat(persona.nombre, " ", persona.apellidop, " ", persona.apellidom) as nombre from cheques, persona, cuentas where cheques.id_persona=persona.id_persona AND cheques.cuenta=cuentas.cuenta and estado=2 AND MONTH(cheques.fecha_cheque)= '.$month.' AND YEAR(cheques.fecha_cheque)='. $year.' order by cheques.folio desc';
  $resultado = $conexion->query($q1);
  $response = array();

  while ($rs = mysqli_fetch_assoc($resultado))
  {
    $response[] = array_map('utf8_encode', $rs);
  }

  mysqli_close($conexion);
  echo json_encode($response);


?>
