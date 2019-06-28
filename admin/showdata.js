function historialpagados()
{
  var head = '<table class="table table-hover table-dark bg-success" style="font-size:90%; color:black;"><thead><tr><th scope="col" style="text-align: center;">FOLIO</th><th scope="col" style="text-align: center;">BENEFICIARIO</th><th scope="col" style="text-align: center;">IMPORTE</th><th scope="col" style="text-align: center;">CUENTA</th><th scope="col" style="text-align: center;">ESTADO</th><th scope="col" style="text-align: center;">FECHA EMISION</th><th scope="col" style="text-align: center;">FECHA PAGADO</th></tr></thead><tbody>';
  var body = '';
  var footer = '</tbody></table>';
  var rs = "";
  var table2 = '';

  var datos = new FormData()
  datos.append('s', 'a');

  fetch('php/consultapagados.php', {
    method: 'POST',
    body: datos
  })
  .then( res => res.json())
  .then( data => {
    console.log(data);
    rs = data;

    for (var i = 0; i < data.length; i++)
    {
      var num = new Intl.NumberFormat('mxn-MXN', { style: 'currency', currency: 'MXN' }).format(data[i]['importe']);

      if (data[i]['estado'] == 1)
      {
        data[i]['estado'] = "PAGADO";
      }
      //console.log("ENTRA");
      var tr = "<tr>" + "<th scope='row'>" + data[i]["folio"] +"</th>" + "<td>" + data[i]["nombre"] + "</td>" + "<td>" + num + "</td>" + "<td>" + data[i]['concepto'] + "</td>" + "<td>" + data[i]['estado'] + "</td>" + "<td>" + data[i]['fecha_cheque'] + "</td>" + "<td>" + data[i]['fecha_pagado'] + "</td>" + "</tr>" ;
      body = body + tr;
    }

    table2 = head + body + footer;

    showtablesuccess(table2, data);

  })
}





function historialcancelados()
{
  var head = '<table class="table table-hover table-dark bg-danger" style="font-size:90%; color:black;"><thead><tr><th scope="col" style="text-align: center;">FOLIO</th><th scope="col" style="text-align: center;">BENEFICIARIO</th><th scope="col" style="text-align: center;">IMPORTE</th><th scope="col" style="text-align: center;">CUENTA</th><th scope="col" style="text-align: center;">ESTADO</th><th scope="col" style="text-align: center;">CAUSA</th><th scope="col" style="text-align: center;">FECHA EMISION</th><th scope="col" style="text-align: center;">FECHA PAGADO</th></tr></thead><tbody>';
  var body = '';
  var footer = '</tbody></table>';
  var rs = "";
  var table2 = '';

  var datos = new FormData()
  datos.append('s', 'a');

  fetch('php/consultacancelados.php', {
    method: 'POST',
    body: datos
  })
  .then( res => res.json())
  .then( data => {
    console.log(data);
    rs = data;

    for (var i = 0; i < data.length; i++)
    {
      var num = new Intl.NumberFormat('mxn-MXN', { style: 'currency', currency: 'MXN' }).format(data[i]['importe']);

      if (data[i]['estado'] == 2)
      {
        data[i]['estado'] = "CANCELADO";
      }
      //console.log("ENTRA");
      var tr = "<tr>" + "<th scope='row'>" + data[i]["folio"] +"</th>" + "<td>" + data[i]["nombre"] + "</td>" + "<td>" + num + "</td>" + "<td>" + data[i]['concepto'] + "</td>" + "<td>" + data[i]['estado'] + "</td>" + "<td>" + data[i]['incidente'] + "</td>" + "<td>" + data[i]['fecha_cheque'] + "</td>" + "<td>" + data[i]['fecha_pagado'] + "</td>" + "</tr>" ;
      body = body + tr;
    }

    table2 = head + body + footer;

    showtablecancel(table2, data);

  })
}


function json2csv(json, tipo)
{
  //var json2 = JSON.stringify(json);
  console.log(Object.keys(json[0]));
  var f = new Date();
  var mes = f.getMonth();
  var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  var ms = meses[f.getMonth()].toUpperCase();

  if (tipo=="1")
  {
    var nomb = "PAGADOS";
  }
  else
  {
    var nomb = "CANCELADO";
  }

  if (json.length >0)
  {
    var csvRows = [];
    csvRows.push(Object.keys(json[0]));

      for (var i = 0; i < json.length; ++i)
      {
        json[i]["concepto"] = '\"' + json[i]["concepto"] + '\"';
        json[i]["estado"] = '\"' + json[i]["estado"] + '\"';
        json[i]["fecha_cheque"] = '\"' + json[i]["fecha_cheque"] + '\"';
        json[i]["fecha_pagado"] = '\"' + json[i]["fecha_pagado"] + '\"';
        json[i]["folio"] = '\"' + json[i]["folio"] + '\"';
        json[i]["importe"] = '\"' + json[i]["importe"] + '\"';
        json[i]["nombre"] = '\"' + json[i]["nombre"] + '\"';

        csvRows.push(json[i]["folio"] + "," + json[i]["importe"] + "," + json[i]["estado"] + "," + json[i]["concepto"] + "," + json[i]["fecha_cheque"] + "," + json[i]["fecha_pagado"] + "," + json[i]["nombre"] ) + ",";

        //csvRows.push(json[i]);
        //csvRows.push(',');
      }

      var csvString = csvRows.join('\r\n');
      console.log(csvString);
      var a         = document.createElement('a');
      a.href        = 'data:attachment/csv,' + csvString;
      a.target      = '_blank';
      a.download    = nomb +ms+'.csv';
      document.body.appendChild(a);
      a.click();
  }
  else {
    Swal.fire(
      'NOT RESPONSE',
      'DATA NOT FOUND IN JSON FILE',
      'question'
    );
  }
}




function showtablesuccess(tabla, json)
{

  var f = new Date();
  var mes = f.getMonth();
  var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

  json2csv(json, "1");

  Swal.fire({
  title: '<strong>CHEQUES PAGADOS EN EL MES: '+ meses[f.getMonth()].toUpperCase() +'</strong>',
  type: 'success',
  html: tabla,
  width: 900,
  showCancelButton: false,
  showConfirmButton: false,
  //grow: 'fullscreen',
  });
}




function showtablemes(tabla, json)
{

  var f = new Date();
  var mes = f.getMonth();
  var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

  json2csv(json, "1");

  Swal.fire({
  title: '<strong>CHEQUES INGRESADOS PARA: '+ meses[f.getMonth()].toUpperCase() +'</strong>',
  type: 'info',
  html: tabla,
  width: 900,
  showCancelButton: false,
  showConfirmButton: false,
  //grow: 'fullscreen',
  });
}


function showtableperson(tabla)
{

  Swal.fire({
  title: '<strong>BENEFICIARIOS REGISTRADOS</strong>',
  type: 'info',
  html: tabla,
  width: 1100,
  showCancelButton: false,
  showConfirmButton: false,
  //grow: 'fullscreen',
  });
}





function showtablecancel(tabla, json)
{
  var f = new Date();
  var mes = f.getMonth();
  var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

  json2csv(json,"2");

  Swal.fire({
  title: '<strong>CHEQUES CANCELADOS EN EL MES: '+ meses[f.getMonth()].toUpperCase() +'</strong>',
  type: 'error',
  html: tabla,
  width: 900,
  showCancelButton: false,
  showConfirmButton: false,
  //grow: 'fullscreen',
  });
}



function mescheques()
{

  var head = '<table class="table table-hover table-dark bg-warning" style="font-size:90%; color:black;"><thead><tr><th scope="col" style="text-align: center;">FOLIO</th><th scope="col" style="text-align: center;">BENEFICIARIO</th><th scope="col" style="text-align: center;">IMPORTE</th><th scope="col" style="text-align: center;">CUENTA</th><th scope="col" style="text-align: center;">ESTADO</th><th scope="col" style="text-align: center;">FECHA EMISION</th><th scope="col" style="text-align: center;">FECHA DE MOVIMIENTO</th></tr></thead><tbody>';
  var body = '';
  var footer = '</tbody></table>';
  var rs = "";
  var table2 = '';

  var datos = new FormData()
  datos.append('s', 'a');

  fetch('php/consultamensual.php', {
    method: 'POST',
    body: datos
  })
  .then( res => res.json())
  .then( data => {
    console.log(data);
    rs = data;

    for (var i = 0; i < data.length; i++)
    {
      var num = new Intl.NumberFormat('mxn-MXN', { style: 'currency', currency: 'MXN' }).format(data[i]['importe']);

      if (data[i]['estado'] == 1)
      {
        data[i]['estado'] = "PAGADO";
      }
      else if (data[i]['estado'] == 2)
      {
        data[i]['estado'] = "CANCELADO";
      }
      else if (data[i]['estado'] == 0)
      {
        data[i]['estado'] = "SIN PAGAR";
      }
      //console.log("ENTRA");
      var tr = "<tr>" + "<th scope='row'>" + data[i]["folio"] +"</th>" + "<td>" + data[i]["nombre"] + "</td>" + "<td>" + num + "</td>" + "<td>" + data[i]['concepto'] + "</td>" + "<td>" + data[i]['estado'] + "</td>" + "<td>" + data[i]['fecha_cheque'] + "</td>" + "<td>" + data[i]['fecha_pagado'] + "</td>" + "</tr>" ;
      body = body + tr;
    }

    table2 = head + body + footer;

    showtablemes(table2, data);

  })

}









function totalpersonas()
{

  var head = '<table class="table table-hover table-dark bg-success" style="font-size:90%; color:black;"><thead><tr><th scope="col" style="text-align: center;">No. ASIGNADO</th><th scope="col" style="text-align: center;">NOMBRE</th><th scope="col" style="text-align: center;">APELLIDO PATERNO</th><th scope="col" style="text-align: center;">APELLIDO MATERNO</th><th scope="col" style="text-align: center;">URL 1</th><th scope="col" style="text-align: center;">URL 2</th></tr></thead><tbody>';
  var body = '';
  var footer = '</tbody></table>';
  var rs = "";
  var table2 = '';

  var datos = new FormData()
  datos.append('s', 'a');

  fetch('php/personastotales.php', {
    method: 'POST',
    body: datos
  })
  .then( res => res.json())
  .then( data => {
    console.log(data);
    rs = data;

    for (var i = 0; i < data.length; i++)
    {
      var tr = "<tr>" + "<th scope='row'>" + data[i]["id_persona"] +"</th>" + "<td>" + data[i]["nombre"] + "</td>" + "<td>" + data[i]["apellidop"] + "</td>" + "<td>" + data[i]["apellidom"] + "</td>" + "<td><img style='width:30%;' src='" + data[i]['credencial1'] + "'></td>" + "<td> <img style='width:30%;' src='" + data[i]['credencial2'] + "'></td>" + "</tr>" ;
      body = body + tr;
    }

    table2 = head + body + footer;

    showtableperson(table2);

  })

}
