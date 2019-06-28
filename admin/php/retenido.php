<?php
  include_once '../../conexion/conexion.php';
  $conexion = conexion();
  $idpersona = $_POST["idpersona"];

  $query = 'SELECT  folio, cuenta, concepto, incidente, imagen from cheques WHERE id_persona='.$idpersona.' AND estado=2 order by fecha_cheque desc';
  $datos = $conexion->query($query);

  $res = array();


    while ($rs = mysqli_fetch_assoc($datos))
    {
      $dt1 = array( 'folio' => $rs["folio"], 'cuenta' => $rs["cuenta"], 'incidente' => $rs["incidente"],'imagen' => $rs["imagen"], 'concepto' => $rs["concepto"]);
      array_push($res, $dt1);
      unset($dt1);
    }
    mysqli_close($conexion);
    echo json_encode($res);
?>
