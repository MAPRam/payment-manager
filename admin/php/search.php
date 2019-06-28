<?php

//
// RESPONDE A busca.js
// función busca()
//

  include '../../conexion/conexion.php';
  $conexion = conexion();

  $nombre  = $_POST["s"];
  //echo $nombre;
  //echo " - ";


  $query = 'SELECT id_persona, nombre, apellidop, apellidom FROM persona where CONCAT(apellidop, " " , apellidom , " ", nombre) LIKE "'.$nombre.'%" ORDER BY id_persona DESC';

  //echo $query;
  //echo " - ";
  $res = $conexion->query($query);
  //print_r($conexion);
  $dt = array();
  //echo " - ";
  while ($rs = mysqli_fetch_assoc($res))
  {
    //$dt1 = array('id' => $rs["id_mensaje_send"], 'envia' => $rs["id_usuario_send"], 'recibe' => $rs["id_usuario_get"], 'titulo' => $rs["titulo_mensaje"], 'descripcion' => $rs["descripcion"], 'fecha1' => $rs["fecha_enviado"], 'hora1' => $rs["hora_enviado"]
  //, 'estado' => $rs["estado_respuesta"], 'enlace1' => $rs["enlace_enviado"], 'enlace2' => $rs["enlace_respuesta"], 'mensaje2' => $rs["mensaje_respuesta"], 'hora2' => $rs["hora_respuesta"], 'fecha2' => $rs["fecha_respuesta"], 'responde' => $rs["responde"], 'prioridad' => $rs["prioridad"]);
    $dt1 = array('nombre' => $rs["nombre"],'apellidop' => $rs["apellidop"],'apellidom' => $rs["apellidom"], 'id_persona' => $rs["id_persona"]);
    //echo " - ";
    //echo "dt1";
    //print_r($dt1);

    array_push($dt, $dt1);
    //$dt = $dt . $dt1;
    unset($dt1);
  }
  mysqli_close($conexion);

  echo json_encode($dt);
  //print_r($dt);

?>
