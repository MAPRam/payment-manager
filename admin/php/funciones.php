<?php

function generames($mes, $year)
{

  $mesresp = 0;
  $yearresp = 0;
  $arreglo1 = array();

  switch ($mes)
  {
    case '01':
      $mesresp = 10;
      $yearresp = $year - 1;
      break;
    case '02':
      $mesresp = 11;
      $yearresp = $year - 1;
      break;
    case '03':
      $mesresp = 12;
      $yearresp = $year - 1;
      break;
    default:
      $mesresp = $mes - 3;
      $yearresp = $year;
      break;
  }
  array_push($arreglo1, $mesresp);
  array_push($arreglo1, $yearresp);

  return $arreglo1;
}



?>
