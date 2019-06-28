<?php
function conexion()
{


  $servername = "localhost";
  $username = "AQUÍ VA EL USERNAME";
  $password = "AQUÍ VA EL PASSWORD";
  $db = "AQUÍ VA EL DBNAME";

  $conn = new mysqli($servername, $username, $password, $db);


  if ($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }
  else
  {
      return $conn;
  }



}


 ?>
