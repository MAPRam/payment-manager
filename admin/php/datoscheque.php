<?php
    require_once '../../conexion/conexion.php';
    $datos = $_POST["datos"];
    $conexion = conexion();

    $string = explode(';', $datos);

    $string[0] = preg_replace('[\s+]',"", $string[0]);


    $string[3] = str_replace("\"", "", $string[3]);

    $query1 = 'SELECT id_persona from persona where concat(apellidop, " ", apellidom, " ", nombre) = "'.$string[3].'"';

    $res = mysqli_fetch_assoc($conexion->query($query1));
    $id = $res["id_persona"];


      if ($id == NULL)
      {
        mysqli_close($conexion);
        echo json_encode('error');
      }
      else
      {
        $existe = 'SELECT IF ( EXISTS ( SELECT folio FROM cheques WHERE folio= '.$string[1].'), 1, 0) as existe';
        $busca = mysqli_fetch_assoc($conexion->query($existe));

        if ($busca["existe"] == 0)
        {
          $fecha = getdate();
          $anio = $fecha["year"];
          $mes = date("m");
          $dia = date("d");
          $fecha2 = $anio . "-" . $mes . "-". $dia;

          $fcheque = explode('/', $string[2]);
          $string[2] = $fcheque[2] . "-" . $fcheque[1] . "-" . $fcheque[0];

          $string[5] = str_replace('"', "\"", $string[5]);
          $string[5] = str_replace('"', "\"", $string[5]);

          $string[4] = str_replace(".", "", $string[4]);
          $string[4] = str_replace(",", ".", $string[4]);

          $query3 = 'INSERT INTO cheques( folio, id_persona, importe, cuenta, concepto, estado, incidente, imagen, fecha_ingreso, reporte, fecha_cheque, fecha_pagado)';
          $query4 = ' VALUES ("'.$string[1].'", '.$id.', "'.$string[4].'", "'.$string[0].'", "'.$string[5].'", 0, "", "", "'.$fecha2.'" , 0, "'.$string[2].'", "2000-01-01")';
          $inserta = $query3 . $query4;

          if ($conexion->query($inserta))
          {
            mysqli_close($conexion);
            echo json_encode('hecho');
          }
          else
          {
            mysqli_close($conexion);
            echo json_encode('noingresa');
          }
        }
        else
        {
          mysqli_close($conexion);
          echo json_encode('existe');
        }

      }

?>
