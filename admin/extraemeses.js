var mese = document.getElementById('consultafechas');


consultafechas.addEventListener('click', () => {
  let mes = document.getElementById('mes').value;
  let year = document.getElementById('year').value;

  if ((mes == "ELIGE UN MES") || (year == "ELIGE UN AÑO"))
  {
    Swal.fire({
    type: 'error',
    title: ':(',
    width: 500,
    text: 'Elige un mes y año válido',
    footer: 'Se detectó un campo sin especificar'
    })
  }
  else
  {
    let datos = new FormData();
    datos.append('mes', mes);
    datos.append('year', year);


    fetch('php/solicitames.php',{
            method: 'POST',
            body: datos
        })
        .then( res => res.json())
        .then( data => {

          let tabla = document.getElementById('peticionmeses');
          tabla.innerHTML = "";
          let suma = document.getElementById('total');
          suma.innerHTML = "";
          var total = 0.0;

          switch (data.length)
          {
            case 0:
                Swal.fire({
                  type: 'warning',
                  title: 'Oops...',
                  width: 700,
                  html: '<p class="h3" style="color: orange;"><strong>No se han encontrado cheques en el mes y año seleccionado</strong></p><br><p>POR FAVOR, INTENTA CON OTRO MES O AÑO</p>',
                  footer: '<p class="bg-deep-orange"><strong>Es posible que no se hayan registrado cheques para este mes, si tiene dudas por favor póngase en contacto con el administrador o el desarrollador para realizar una búsqueda masiva</strong></p>'
                })
              break;

            default:

              for (let i = 0; i < data.length; i++)
              {

                  let tr = document.createElement('tr');

                  var td1 = document.createElement('td');
                  var td2 = document.createElement('td');
                  var td3 = document.createElement('td');
                  var td4 = document.createElement('td');
                  var td5 = document.createElement('td');
                  var td6 = document.createElement('td');
                  var td7 = document.createElement('td');
                  var td8 = document.createElement('td');
                  total = total + parseFloat(data[i]['importe']);
                  //console.log(parseFloat(data[i]['importe']));
                  //data[i]['importe']
                  //console.log(total);
                  var imp = new Intl.NumberFormat('mxn-MXN', { style: 'currency', currency: 'MXN' }).format(data[i]['importe']);
                  let estado = "";
                  let incidente = "";
                  var clas = document.createAttribute('class');
                  switch (data[i]["estado"])
                  {
                    case "0":
                        estado = "SIN PAGAR";
                        incidente = "N/A";

                        clas.value='bg-secondary';
                        tr.setAttributeNode(clas);
                        //tr.setAttributeNode(clas);
                      break;
                    case "1":
                        estado = "PAGADO";
                        incidente = "N/A";

                        clas.value='bg-green';
                        tr.setAttributeNode(clas);

                      break;
                      case "2":
                        estado = "CANCELADO";
                        incidente = data[i]["incidente"];

                        clas.value='bg-deep-orange';
                        tr.setAttributeNode(clas);

                        break;
                    default:

                  }



                  let cont1 = document.createTextNode(data[i]["folio"]);
                  let cont2 = document.createTextNode(data[i]["concepto"]);
                  let cont3 = document.createTextNode(imp);
                  let cont4 = document.createTextNode(data[i]["nombre"]);
                  let cont5 = document.createTextNode(estado);
                  let cont6 = document.createTextNode(incidente);
                  let cont7 = document.createTextNode(data[i]["fecha_cheque"]);
                  let cont8 = document.createTextNode(data[i]["fecha_pagado"]);

                  console.log(cont1);


                  td1.appendChild(cont1);
                  td2.appendChild(cont2);
                  td3.appendChild(cont3);
                  td4.appendChild(cont4);
                  td5.appendChild(cont5);
                  td6.appendChild(cont6);
                  td7.appendChild(cont7);
                  td8.appendChild(cont8);

                  tr.appendChild(td1);
                  tr.appendChild(td2);
                  tr.appendChild(td3);
                  tr.appendChild(td4);
                  tr.appendChild(td5);
                  tr.appendChild(td6);
                  tr.appendChild(td7);
                  tr.appendChild(td8);

                  tabla.appendChild(tr);

              }
              total = new Intl.NumberFormat('mxn-MXN', { style: 'currency', currency: 'MXN' }).format(total);
              suma.innerHTML = "TOTAL REGISTRADO EN EL MES: <strong>" + total + "</strong>";
            break;

          }





    })



  }

});
