<?php
  include_once '../../conexion/conexion.php';
  $conexion = conexion();

  $mes = $_POST["mes"];
  $year = $_POST["year"];

  $q1 = 'SELECT cheques.folio, cheques.importe, cheques.incidente, cheques.estado, cuentas.concepto, cheques.fecha_cheque, cheques.fecha_pagado, concat(persona.nombre, " ", persona.apellidop, " ", persona.apellidom) as nombre from cheques, persona, cuentas where cheques.id_persona=persona.id_persona AND cheques.cuenta=cuentas.cuenta AND MONTH(cheques.fecha_cheque)= '.$mes.' AND YEAR(cheques.fecha_cheque)='. $year.' order by cheques.folio desc';
  $datos = $conexion->query($q1);

  $response = array();

    while ($rs = mysqli_fetch_assoc($datos))
    {
      $response[] = array_map('utf8_encode', $rs);
    }


  mysqli_close($conexion);
  echo json_encode($response);

?>
