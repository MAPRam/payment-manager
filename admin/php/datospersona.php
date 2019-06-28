<?php

    require_once '../../conexion/conexion.php';
    $conexion = conexion();

    $nombre = $_POST["nombre"];
    $apellidop = $_POST["apellidop"];
    $apellidom = $_POST["apellidom"];

    $total = count($_FILES['credencial']['name']);
    $datos = $nombre . " " . $apellidop . " " . $apellidom;
    $destino = 'ine';
    $reg = '../';

    $nombre1 = str_replace(" ","_", $nombre);
    $apellidop1 = str_replace(" ","_", $apellidop);

    $hoy = date("Y-m-d");

    $nombres = array();

    for ($i=0; $i < $total ; $i++)
    {
      // $datos = $datos . " " . $_FILES['credencial']['name'][$i];
      $tmpFilePath = $_FILES['credencial']['tmp_name'][$i];

      if ($tmpFilePath != "")
      {
        $fil = $destino . "/" . $hoy . "_" . $nombre1 . $apellidop1 . "_" . $_FILES['credencial']['name'][$i];
                //array_push($nombres, $fil);
                if (move_uploaded_file($tmpFilePath, $reg . $fil))
                {
                    chmod($reg . $fil, 0777);
                    array_push($nombres, $fil);
                }
      }

    }


    $query1 = 'SELECT max(id_persona) as maximo from persona';
    $res = mysqli_fetch_assoc($conexion->query($query1));
    $maximo = $res["maximo"] + 1;

    $query2 = 'INSERT INTO persona(id_persona, nombre, apellidop, apellidom, credencial1, credencial2) VALUES('.$maximo.', "'.$nombre.'", "'.$apellidop.'", "'.$apellidom.'", "'.$nombres[0].'", "'.$nombres[1].'")';
    if ($conexion->query($query2))
    {
      mysqli_close($conexion);
      echo json_encode('hecho');
    }
    else
    {
      mysqli_close($conexion);
      echo json_encode('error');
    }




?>
