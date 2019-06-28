<?php
  include_once '../../conexion/conexion.php';

  $id = $_POST["id"];
  $motivo = $_POST["motivo"];
  $idpersona = $_POST["idpersona"];
  $nombre = $_POST["nombre"];

  $fecha = getdate();
  $anio = $fecha["year"];
  $mes = date("m");
  $dia = date("d");
  $fecha2 = $anio . "-" . $mes . "-". $dia . " " . $fecha["hours"] . ":" . $fecha["minutes"];

  $conexion = conexion();

  $query = 'UPDATE cheques SET estado=2, fecha_pagado="'.$fecha2.'", incidente="'.$motivo.'" WHERE folio='.$id;

  if ($conexion->query($query))
  {
      mysqli_close($conexion);
      echo json_encode('eliminado');
  }
  else
  {
    mysqli_close($conexion);
    echo json_encode('error');
  }

  //$res = $id . " " . $motivo. " " . $idpersona. " " .$nombre;

?>
