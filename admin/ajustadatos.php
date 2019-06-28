<?php
  include_once '../conexion/conexion.php';

  $conexion = conexion();

  $query1 = 'SELECT id_persona, nombre, apellidop, apellidom FROM persona';
  $datos = $conexion->query($query1);


  function endsWith($string, $endString)
  {
    $len = strlen($endString);
    if ($len == 0) {
        return true;
    }
    return (substr($string, -$len) === $endString);
  }


  while ($rs = mysqli_fetch_assoc($datos))
  {
    echo $rs["id_persona"];
    $id = $rs["id_persona"];
    echo " ->  ";


    if(endsWith($rs["nombre"]," "))
    {
      $n = substr($rs["nombre"], 0, -1);
      $q1 = 'UPDATE persona SET nombre ="' . $n .'" WHERE id_persona=' . $id;
      if ($conexion->query($q1))
      {
        echo "(V)";
      }
      else {
        echo "(X)";
      }
      echo "'".$rs["nombre"]."'".": True";
    }

    else
    {
      echo "False";
    }



    if(endsWith($rs["apellidop"]," "))
    {
      $a1 = substr($rs["apellidop"], 0, -1);
      $q2 = 'UPDATE persona SET apellidop ="' . $a1 .'" WHERE id_persona=' . $id;
      if ($conexion->query($q2))
      {
        echo "(V)";
      }
      else {
        echo "(X)";
      }
      echo "'".$rs["apellidop"]."'".": True";
    }

    else
    {
      echo "False";
    }



    if(endsWith($rs["apellidom"]," "))
    {
      $a2 = substr($rs["apellidom"], 0, -1);
      $q3 = 'UPDATE persona SET apellidom ="' . $a2 .'" WHERE id_persona=' . $id;
      if ($conexion->query($q3))
      {
        echo "(V)";
      }
      else {
        echo "(X)";
      }
      echo "'".$rs["apellidom"]."'".": True";
    }

    else
    {
        echo "False";
    }

      echo "  -- ";
  //$myString = substr($myString, 0, -1);
  //echo $myString;


    echo "<br>";



  }



  mysqli_close($conexion);


?>
