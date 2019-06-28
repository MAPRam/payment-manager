
/*PETICIÓN PARA BUSCAR USUARIOS EN EL SISTEMA*/
function busca()
{
        var busca = document.getElementById('buscador').value;
        var tabla = document.getElementById('tabla');
        var al = document.getElementById('alrt');
        document.getElementById('ine1').innerHTML = '';
        tabla.innerHTML = '';
        var row = '<tr>';
        var row2 = '</tr>';
        var  alerta1 = document.getElementById('alerta');

        if (busca != '')
        {

          var datos = new FormData()
          datos.append('s', busca);

          fetch('php/search.php',{
                  method: 'POST',
                  body: datos
              })
              .then( res => res.json())
              .then( data => {

              if (data === 'error')
              {
                  alert("Error");
              }

              else
              {
                var tm = data.length;

                if (tm == 0)
                {

                  tabla.innerHTML = '';
                  alerta1.innerHTML = '<div class="alert alert-danger h5 justify-content-center"><strong>¡NO HAY RESULTADOS PARA ESTA BÚSQUEDA!</strong></div>';
                }
                else
                {
                  alerta1.innerHTML = '';

                  for (var i = 0; i < data.length; i++)
                  {
                    var tr = document.createElement('tr');

                    var font = document.createAttribute('style');
                    font.value = 'font-size:14px; font-weight: bold;';
                    tr.setAttributeNode(font);

                    var td2 = document.createElement('td');
                    var td3 = document.createElement('td');
                    var btn1 = document.createElement('button');

                    var id = document.createAttribute('id');
                    id.value = 'user' + data[i]["id_persona"];
                    td2.setAttributeNode(id);

                    var id2 = document.createAttribute('id');
                    id2.value = data[i]["id_persona"];
                    btn1.setAttributeNode(id2);

                    var clas = document.createAttribute('class');
                    clas.value='btn btn-warning btn-xs';
                    btn1.setAttributeNode(clas);

                    var val = document.createAttribute('value');
                    val.value= data[i]["nombre"] + " " + data[i]["apellidop"] + " " + data[i]["apellidom"];
                    btn1.setAttributeNode(val);

                    var func = document.createAttribute('onclick');
                    func.value= 'masinfo(this.id, this.value);';
                    btn1.setAttributeNode(func);

                    var cont2 = document.createTextNode(data[i]["apellidop"] + " " + data[i]["apellidom"] + " " + data[i]["nombre"]);
                    var cont3 = document.createTextNode('MAS');

                    td2.appendChild(cont2);
                    btn1.appendChild(cont3);

                    tr.appendChild(td2);
                    tr.appendChild(btn1);

                    tabla.appendChild(tr);
                  }
                }
              }
              })

        }
      }



/*FUNCIÓN PARA DESPLEGAR INFORMACIÓN DEL USUARIO SELECCIONADO*/

function masinfo(id, value)
{
  document.getElementById('nmb').style.visibility= "visible";
  document.getElementById('usernomb').innerHTML = value;

  document.getElementById('imprimecredencial').style.visibility= "visible";
  var ine1 = document.getElementById('ine1');
  var ine2 = document.getElementById('ine2');

  var tabla2 = document.getElementById('chequereg');
  var alerta2 = document.getElementById('alerta2');

  //console.log('ID DE RETENIDOS');
  //console.log(id);

  var datos1 = new FormData()
  datos1.append('id', id);
  datos1.append('value', value);

  fetch('php/info.php',{
          method: 'POST',
          body: datos1
      })
      .then( res => res.json())
      .then( data => {


        var src = document.createAttribute('src');
        src.value = data[0];
        ine1.setAttributeNode(src);

        var src2 = document.createAttribute('src');
        src2.value = data[1];
        ine2.setAttributeNode(src2);

        var tam = data.length;

        if (tam == 0)
        {
          tabla2.innerHTML = '';
          alerta2.innerHTML = '<div class="alert alert-danger h5 justify-content-center"><strong>¡NO SE HAN ENCONTRADO CHEQUES RELACIONADOS A ESTE USUARIO!</strong></div>';
        }
        else
        {
          alerta2.innerHTML = '';
          tabla2.innerHTML = '';

          for (var i = 3; i < data.length; i++)
          {

            var tr = document.createElement('tr');

            var font = document.createAttribute('style');
            font.value = 'font-size:14px; font-weight: bold;';
            tr.setAttributeNode(font);

            var td1 = document.createElement('td');
            var td2 = document.createElement('td');
            var td3 = document.createElement('td');
            var td4 = document.createElement('td');
            var td5 = document.createElement('td');
            //var btn1 = document.createElement('button');
            var btn2 = document.createElement('button');
            var btn3 = document.createElement('button');


            console.log(data[i]['folio'] + 'DATAI');


            //var id = document.createAttribute('id');
            //id.value = data[i]['folio'] + ',' + data[2];
            //btn1.setAttributeNode(id);

            var id2 = document.createAttribute('id');
            id2.value = data[i]['folio'] + ',' + data[2];
            btn2.setAttributeNode(id2);

            var id3 = document.createAttribute('id');
            id3.value = data[i]['folio'] + ',' + data[2];
            btn3.setAttributeNode(id3);


            //var class1 = document.createAttribute('class');
            //class1.value = 'btn bg-cyan btn-xs';
            //btn1.setAttributeNode(class1);

            var class2 = document.createAttribute('class');
            class2.value = 'btn bg-orange btn-xs';
            btn2.setAttributeNode(class2);

            var class3 = document.createAttribute('class');
            class3.value = 'btn bg-red btn-xs';
            btn3.setAttributeNode(class3);


            //var val1 = document.createAttribute('value');
            //val1.value = data[i]['folio'];
            //btn1.setAttributeNode(val1);

            var val2 = document.createAttribute('value');
            val2.value = data[i]['folio'];
            btn2.setAttributeNode(val2);

            var val3 = document.createAttribute('value');
            val3.value = data[i]['folio'];
            btn3.setAttributeNode(val3);


            var func2 = document.createAttribute('onclick');
            func2.value = 'pagarcheque(this.id)';
            btn2.setAttributeNode(func2);

            var func3 = document.createAttribute('onclick');
            func3.value = 'retenercheque(this.id, usernomb.value)';
            btn3.setAttributeNode(func3);

            var imp = new Intl.NumberFormat('mxn-MXN', { style: 'currency', currency: 'MXN' }).format(data[i]['importe']);

            var cont1 = document.createTextNode(data[i]['folio']);
            var cont2 = document.createTextNode(data[i]['concepto']);
            var cont3 = document.createTextNode(data[i]['cuenta']);
            var cont4 = document.createTextNode(imp);
            var cont5 = document.createTextNode('VER');
            var cont6 = document.createTextNode('PAY');
            var cont7 = document.createTextNode('CANCEL');


            //btn1.appendChild(cont5);
            btn2.appendChild(cont6);
            btn3.appendChild(cont7);

            td1.appendChild(cont1);
            td2.appendChild(cont2);
            td3.appendChild(cont3);
            td4.appendChild(cont4);
            //td5.appendChild(btn1);
            td5.appendChild(btn2);
            td5.appendChild(btn3);

            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);

            tabla2.appendChild(tr);
          }

          retenidos(id);
          //
          // CHEQUES CANCELADOS
          //



        }
  })
}



function vercheque(id, value)
{
  console.log('VER');
  console.log(id);
  console.log(value);

}



function pagarcheque(id)
{
  var nombre = document.getElementById('usernomb').innerHTML;
  var dt = id.split(",");

  var id = dt[0];
  var persona = dt[1];

  var datos2 = new FormData()
  datos2.append('folio', id);
  datos2.append('persona', persona);

  fetch('php/pagar.php',{
          method: 'POST',
          body: datos2
      })
      .then( res => res.json())
      .then( data => {

        if (data == 'error')
        {
          console.log('error');
          //tabla2.innerHTML = '';
          //alerta2.innerHTML = '<div class="alert alert-danger h5 justify-content-center"><strong>¡NO SE HAN ENCONTRADO CHEQUES RELACIONADOS A ESTE USUARIO!</strong></div>';
        }
        else
        {
          console.log(data);
          masinfo(persona, nombre);
          //swal("PAGADO", "SE HA REGISTRADO COMO PAGADO :)", "success");
        }
  })



}


function retenidos(idpersona)
{

  var datos = new FormData();
  datos.append('idpersona', idpersona);

  var ret = document.getElementById('dashboardretenido');
  ret.innerHTML = '';

  fetch('php/retenido.php', {
    method: 'POST',
    body: datos
  })
  .then( res => res.json())
  .then(data => {
    if (data == 'error')
    {
      console.log('error');
    }
    else
    {
      console.log(data);

      var tam = data.length;
      console.log(data.length);

      if (tam==0)
      {
        console.log('HAY CERO DATOS');
      }
      else
      {


        for (var i = 0; i < data.length; i++)
        {

          var li = document.createElement('li');
          var card = document.createElement('div');

          var clas1 = document.createAttribute('class');
          clas1.value = 'card bg-blue-grey  mb-3';
          card.setAttributeNode(clas1);

          var style1 = document.createAttribute('style');
          style1.value = 'max-width: 100%;';
          card.setAttributeNode(style1);

          var header = document.createElement('div');
          var clash = document.createAttribute('class');
          clash.value = 'card-header';
          header.setAttributeNode(clash);
          var contheader = document.createTextNode(data[i]['folio']);
          header.appendChild(contheader);
          card.appendChild(header);

          var body = document.createElement('div');
          var clasb = document.createAttribute('class');
          clasb.value = 'card-body';
          body.setAttributeNode(clasb);

          var titulo = document.createElement('h5');
          var clastitle = document.createAttribute('class');
          clastitle.value = 'card-title';
          titulo.setAttributeNode(clastitle);
          var texttitle = document.createTextNode(data[i]['concepto']);
          titulo.appendChild(texttitle);

          body.appendChild(titulo);

          var texto = document.createElement('h6');
          var clastext = document.createAttribute('class');
          clastext.value = 'card-title';
          texto.setAttributeNode(clastext);
          var textobody = document.createTextNode(data[i]['incidente']);
          texto.appendChild(textobody);

          body.appendChild(texto);

          header.appendChild(body);


          var footer = document.createElement('div');
          var classfooter = document.createAttribute('class');
          classfooter.value = 'card-footer';
          footer.setAttributeNode(classfooter);
          var stylefooter = document.createAttribute('style');
          stylefooter.value = 'float: right;';

          var btn1 = document.createElement('button');
          var btn2 = document.createElement('button');

          var classbtn1 = document.createAttribute('class');
          classbtn1.value = 'btn btn-danger btn-sm';
          btn1.setAttributeNode(classbtn1);

          var classbtn2 = document.createAttribute('class');
          classbtn2.value = 'btn btn-warning btn-sm';
          btn2.setAttributeNode(classbtn2);

          var stylebtn1 =document.createAttribute('style');
          stylebtn1.value = 'font-size: 70%; float: right;';
          btn1.setAttributeNode(stylebtn1);

          var texto1 = document.createTextNode('LIBERAR Y PAGAR');

          var stylebtn2 =document.createAttribute('style');
          stylebtn2.value = 'font-size: 70%; float: right;';
          btn2.setAttributeNode(stylebtn2);

          btn1.appendChild(texto1);

          footer.appendChild(btn1);
          footer.appendChild(btn2);

          card.appendChild(header);

          card.appendChild(body);
          card.appendChild(footer);
          li.appendChild(card);

          ret.appendChild(li);

        }

      }
    }
  })
}




function imprimecredencial()
{
  i1 = document.getElementById('ine1').src;
  i2 = document.getElementById('ine2').src;
  //  display: inline-block;      display: inline-block;  <div style="float:right;">   </div>
  var src = '<div style="width: 100%; display: inline-block"><div style="float:left;"><img style="width:49%;" src="' + i1 + '">   <img style="width:49%;" src="'+ i2 +'">     </div></div>';

  w = window.open();
  w.document.write(src);
  w.document.close();
  w.focus();
  w.print();
  w.close();
  return true;

}


function retenercheque(id)
{
  id1 = id.split(',');
  Swal.fire({
  type: "warning",
  title: 'CANCELACIÓN DE CHEQUES',
  html: '<p style="font-size: 16px; color:#B03A2E;">FOLIO POR CANCELAR: <strong>' + id1[0] + '</strong> </p><br><p style="font-size:10px; color:#B03A2E;">POR FAVOR ESCRIBA EL MOTIVO DE CANCELACIÓN</p><p style="font-size:10px; color:#1E8449;">PARA QUITAR ESTA OPERACIÓN ESCRIBA EL COMANDO:<strong> CANCELA OPERACION</strong></p>',
  input: 'text',
  showCancelButton: false,
  width: 500,
  confirmButtonColor: "#B03A2E",
  confirmButtonText: 'SÍ, CANCELAR',
  allowOutsideClick: false
}).then( (text) => {

  switch (text.value)
  {
    case "CANCELA OPERACIÓN":
        Swal.fire({
          type: 'info',
          width: 500,
          title: 'OPERACIÓN CANCELADA POR COMANDO DE TEXTO',
          html: 'EL CHEQUE CON FOLIO <strong>' + id1[0] + '</strong> SE CONSERVA'
        })
      break;
    case "":
        Swal.fire({
          type: 'info',
          width: 500,
          title: 'OPERACIÓN CANCELADA POR FALTA DE JUSTIFICACIÓN',
          html: 'EL CHEQUE CON FOLIO <strong>' + id1[0] + '</strong> SE CONSERVA'
        })
      break;

    default:

    var dato = new FormData();
    var motivo = text.value;
    var nombre = document.getElementById('usernomb').innerHTML;


    dato.append('id', id1[0]);
    dato.append('motivo', motivo);
    dato.append('idpersona', id1[1]);
    dato.append('nombre', nombre);


    fetch('php/confirmacancelacion.php', {
      method: 'POST',
      body: dato
    })
    .then( res => res.json())
    .then( data =>
      {
        console.log(data);
        if (data == 'eliminado')
        {
          Swal.fire({
            type: 'success',
            width: 500,
            title: 'CHEQUE CANCELADO',
            html: 'EL FOLIO <strong>' + id1[0] + '</strong> ha sido cancelado'
          })

          masinfo(id1[1], nombre);
          retenidos(id1[1]);
        }
        else {
          Swal.fire({
            type: 'error',
            width: 500,
            title: 'ALGO HA OCURRIDO',
            html: '<strong>OPERACIÓN CALNCELADA, CHEQUE NO CANCELADO</strong>'
          })
        }



      })

    break;

  }

})
}
