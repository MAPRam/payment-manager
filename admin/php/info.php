<?php
  $id = $_POST["id"];
  $nomb = $_POST["value"];

  include '../../conexion/conexion.php';
  $conexion = conexion();

  $query1 = 'SELECT credencial1, credencial2 from persona where id_persona=' . $id;
  $query2 = 'SELECT folio, importe, cuenta, concepto, estado, imagen FROM cheques WHERE id_persona='.$id.' AND estado=0';

  $datos1 = mysqli_fetch_assoc($conexion->query($query1));
  $datos2 = $conexion->query($query2);

  $dt = array();
  array_push($dt, $datos1["credencial1"]);
  array_push($dt, $datos1["credencial2"]);
  array_push($dt, $id);


  while ($rs = mysqli_fetch_assoc($datos2))
  {
    $check = array('folio'=>$rs["folio"],'importe'=>$rs["importe"],'cuenta'=>$rs["cuenta"],'concepto'=>$rs["concepto"],'imagen'=>$rs["imagen"]);
    //  array_map('utf8_encode', $rs);
    array_push($dt, array_map('utf8_decode', $check));
    unset($check);
  }


  mysqli_close($conexion);

  echo json_encode($dt);
?>
