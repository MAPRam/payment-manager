<?php
  $inicio = $_POST["inicio"];
  $fin = $_POST["fin"];

  require_once '../../conexion/conexion.php';
  require_once 'funciones.php';
  $conexion = conexion();

  $fecha = getdate();
  $anio = $fecha["year"];
  $mes = date("m");
  $dia = date("d");
  $fecha2 = $anio . "-" . $mes . "-". $dia;
  $datosremanente = generames($mes, $anio);

  $remanente = $mes - 1;


  $query1 = 'SELECT * from cheques where MONTH(fecha_cheque) = '. $remanente .' AND YEAR(fecha_cheque) ='.$anio. ' AND estado = 0';
  $query2 = 'SELECT * from cheques where MONTH(fecha_cheque) = '.$datosremanente[0].' AND YEAR(fecha_cheque) = ' .$datosremanente[1] . ' AND estado =0';
  $query3 = 'SELECT id_persona, count(*) as numero FROM cheques WHERE MONTH(fecha_cheque) = '. $mes .' AND YEAR(fecha_cheque) ='.$anio. ' GROUP BY id_persona';


  $datos1 = $conexion->query($query1);
  $datos2 = $conexion->query($query2);
  $datos3 = $conexion->query($query3);


  $dt1 = array();
  $dt2 = array();
  $dt3 = array();

  while ($rs1 = mysqli_fetch_assoc($datos2))
  {
    $dtmp = array('folio' => $rs1["folio"]);
    array_push($dt1, $dtmp);
    unset($dtmp);
  }





  mysqli_close($conexion);
  echo json_encode($query1);

?>
