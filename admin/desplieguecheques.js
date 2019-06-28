button = document.getElementById('genera');

button.addEventListener("click", () =>{
  var folio = document.getElementById('folio').value;

  if (folio!= '')
  {
    var datos = new FormData();
    datos.append('folio', folio);

    fetch('php/buscadatos1.php',{
      method: 'POST',
      body: datos
    })
    .then( res => res.json())
    .then( data => {
      //console.log(data["datacheque"]);

    document.getElementById('resultado').style.visibility = 'visible';
    document.getElementById("conceptotextarea").innerHTML = "";

      console.log(data);
      console.log(NumeroALetras(data["datacheque"]["importe"]));
      console.log(fechacheque(data["datacheque"]["fecha_cheque"]));
      document.getElementById("exporta").disabled = false;
      document.getElementById("borra").disabled = false;
      document.getElementById("imprime").disabled = false;

      var imp = new Intl.NumberFormat('mxn-MXN').format(data["datacheque"]["importe"]);

      //console.log(imp.charAt(imp.length-1));

      if ((data["datacheque"]["importe"] % 1) == 0)
      {
        //alert("entero");

        imp = imp + ".00";
        //alert(imp);
      }

      if ((imp.charAt(imp.length-2) == ".") )
      {
        imp = imp + "0";
        //alert(imp);
      }
      var fech = fechacheque(data["datacheque"]["fecha_cheque"]);
      var folio = data["datacheque"]["folio"];
      var ap1 = "";
      var am1 = "";

      if (data["persona"]["apellidom"] == "-"){data["persona"]["apellidom"] = "";}
      if (data["persona"]["apellidom"] == "-"){data["persona"]["apellidom"] = "";}
      if (data["persona"]["apellidop"]=="-") {ap1 = "";} else { ap1 = data["persona"]["apellidop"];}
      if (data["persona"]["apellidom"]=="-") {am1 = "";} else { am1 = data["persona"]["apellidom"];}

      var benef = data["persona"]["nombre"] + " " + ap1 + " " + am1;
      var conceptovista = data["datacheque"]["concepto"];
      //alert(benef.length);

      if ( benef.length > 90 )
      {
        var bn = document.getElementById('benefres');

        var st = document.createAttribute('style');
        st.value = "display: inline-block; width: 70%; font-family: 'Agency FB'; font-size: 12px;";
        bn.setAttributeNode(st);
      }


      var vacio = "";

      var tmconc = data["datacheque"]["concepto"].length / 90;

      if ((tmconc) > 1)
      {
        var cnt = 0;
        var cnt1 =90;

        for (var i = 0; i < tmconc; i++)
        {
          vacio += data["datacheque"]["concepto"].substring(cnt, cnt1) + " \n ";
          cnt += 90;
          cnt1 += 90;
        }

        cnt = 0;
        cnt1 = 0;
          //console.log(tmconc);
          //console.log(vacio);
          //console.log("Se acerca al límite");
      }
      else {
        vacio = data["datacheque"]["concepto"]
      }

        if (data["datacheque"]["estado"]=="2")
        {
          var  btnprint = document.getElementById('print1');

          document.getElementById("fechares").innerHTML = fech;
          document.getElementById("benefres").innerHTML = benef;
          document.getElementById("cuenta").innerHTML = data["datacheque"]["cuenta"];

          document.getElementById("importeres").innerHTML = "$ " + imp + ": CANCELADO";
          document.getElementById("importeres2").innerHTML = "$ " + imp + ": CANCELADO";
          document.getElementById("palabres").innerHTML = "(" + NumeroALetras(data["datacheque"]["importe"]) + ": CANCELADO" + ")";
          document.getElementById("conceptotextarea").innerHTML = vacio; // data["datacheque"]["concepto"];
          document.getElementById('concepto').innerHTML = "CANCELADO";
        }
        else {
          var  btnprint = document.getElementById('print1');

          document.getElementById("fechares").innerHTML = fech;
          document.getElementById("benefres").innerHTML = benef;
          document.getElementById("cuenta").innerHTML = data["datacheque"]["cuenta"];

          document.getElementById("importeres").innerHTML = "$ " + imp;
          document.getElementById("importeres2").innerHTML = "$ " + imp;
          document.getElementById("palabres").innerHTML = "(" + NumeroALetras(data["datacheque"]["importe"]) + ")";
          document.getElementById("conceptotextarea").innerHTML = vacio; // data["datacheque"]["concepto"];
          document.getElementById('concepto').innerHTML = document.getElementById('conceptotextarea').value;
        }

      var printc = document.createAttribute('onclick');
      printc.value = 'imprimecredencial("'+data["persona"]["credencial1"]+ '","'+data["persona"]["credencial2"]+ '", "'+data["datacheque"]["folio"]+'", "'+data["datacheque"]["fecha_pagado"]+'","'+data["datacheque"]["estado"]+'", "'+data["datacheque"]["incidente"]+'" )';
      btnprint.setAttributeNode(printc);

    })

  }



});


function fechacheque(fecha)
{
  var fecha1 = fecha.split("-");
  var mes = "";

  switch (fecha1[1])
  {
    case '01':
        mes = " de Enero de ";
      break;

    case '02':
        mes = " de Febrero de ";
      break;

    case '03':
        mes = " de Marzo de ";
      break;

    case '04':
        mes = " de Abril de ";
      break;

    case '05':
        mes = " de Mayo de ";
      break;
    case '06':

        mes = " de Junio de ";
      break;

    case '07':
        mes = " de Julio de ";
      break;

    case '08':
        mes = " de Agosto de ";
      break;
    case '09':
        mes = " de Septiembre de ";
      break;
    case '10':
        mes = " de Octubre de ";
      break;
    case '11':
        mes = " de Noviembre de ";
      break;
    case '12':
        mes = " de Diciembre de ";
      break;

    default:
    break;

  }
  var fecha2 = fecha1[2] + mes + fecha1[0];
  return fecha2;

}



function Unidades(num){

    switch(num)
    {
        case 1: return "UN";
        case 2: return "DOS";
        case 3: return "TRES";
        case 4: return "CUATRO";
        case 5: return "CINCO";
        case 6: return "SEIS";
        case 7: return "SIETE";
        case 8: return "OCHO";
        case 9: return "NUEVE";
    }

    return "";
}//Unidades()

function Decenas(num){

    decena = Math.floor(num/10);
    unidad = num - (decena * 10);

    switch(decena)
    {
        case 1:
            switch(unidad)
            {
                case 0: return "DIEZ";
                case 1: return "ONCE";
                case 2: return "DOCE";
                case 3: return "TRECE";
                case 4: return "CATORCE";
                case 5: return "QUINCE";
                default: return "DIECI" + Unidades(unidad);
            }
        case 2:
            switch(unidad)
            {
                case 0: return "VEINTE";
                default: return "VEINTI" + Unidades(unidad);
            }
        case 3: return DecenasY("TREINTA", unidad);
        case 4: return DecenasY("CUARENTA", unidad);
        case 5: return DecenasY("CINCUENTA", unidad);
        case 6: return DecenasY("SESENTA", unidad);
        case 7: return DecenasY("SETENTA", unidad);
        case 8: return DecenasY("OCHENTA", unidad);
        case 9: return DecenasY("NOVENTA", unidad);
        case 0: return Unidades(unidad);
    }
}//Unidades()

function DecenasY(strSin, numUnidades) {
    if (numUnidades > 0)
    return (strSin + " Y " + Unidades(numUnidades))

    return strSin;
}//DecenasY()

function Centenas(num) {
    centenas = Math.floor(num / 100);
    decenas = num - (centenas * 100);

    switch(centenas)
    {
        case 1:
            if (decenas > 0)
                return "CIENTO " + Decenas(decenas);
            return "CIEN";
        case 2: return "DOSCIENTOS " + Decenas(decenas);
        case 3: return "TRESCIENTOS " + Decenas(decenas);
        case 4: return "CUATROCIENTOS " + Decenas(decenas);
        case 5: return "QUINIENTOS " + Decenas(decenas);
        case 6: return "SEISCIENTOS " + Decenas(decenas);
        case 7: return "SETECIENTOS " + Decenas(decenas);
        case 8: return "OCHOCIENTOS " + Decenas(decenas);
        case 9: return "NOVECIENTOS " + Decenas(decenas);
    }

    return Decenas(decenas);
}//Centenas()

function Seccion(num, divisor, strSingular, strPlural) {
    cientos = Math.floor(num / divisor)
    resto = num - (cientos * divisor)

    letras = "";

    if (cientos > 0)
        if (cientos > 1)
            letras = Centenas(cientos) + " " + strPlural;
        else
            letras = strSingular;

    if (resto > 0)
        letras += "";

    return letras;
}//Seccion()

function Miles(num) {
    divisor = 1000;
    cientos = Math.floor(num / divisor)
    resto = num - (cientos * divisor)

    strMiles = Seccion(num, divisor, "MIL", "MIL"); // "UN MIL", "MIL"
    strCentenas = Centenas(resto);

    if(strMiles == "")
        return strCentenas;

    return strMiles + " " + strCentenas;
}//Miles()

function Millones(num) {
    divisor = 1000000;
    cientos = Math.floor(num / divisor)
    resto = num - (cientos * divisor)

    strMillones = Seccion(num, divisor, "UN MILLON DE", "MILLONES DE");
    strMiles = Miles(resto);

    if(strMillones == "")
        return strMiles;

    return strMillones + " " + strMiles;
}//Millones()

function NumeroALetras(num) {
    var data = {
        numero: num,
        enteros: Math.floor(num),
        centavos: (((Math.round(num * 100)) - (Math.floor(num) * 100))),
        letrasCentavos: "00/100 M.N.",
        letrasMonedaPlural: 'PESOS',
        letrasMonedaSingular: 'PESO',

        letrasMonedaCentavoPlural: "CENTAVOS",
        letrasMonedaCentavoSingular: "CENTAVO"
    };

    if (data.centavos >= 1)
    {
      //alert(data.centavos + " HOLA ");

      data.letrasCentavos = "0" + data.centavos + "/" + "100 M.N.";


    };


    if(data.enteros == 0)
        return "CERO " + data.letrasMonedaPlural + " " + data.letrasCentavos;
    if (data.enteros == 1)
    {
        return Millones(data.enteros) + " " + data.letrasMonedaSingular + " " + data.letrasCentavos;
    }
    else
    {
      return Millones(data.enteros) + " " + data.letrasMonedaPlural + " " + data.letrasCentavos;
    }

}



function conceptoarea()
{
  document.getElementById('concepto').innerHTML = document.getElementById('conceptotextarea').value;
}

function negrita()
{
  document.getElementById('conceptotextarea').value += '<strong></strong>';
}

function recibo()
{
  document.getElementById('recibo1').innerHTML = document.getElementById('reciboinput').value;
}

function costo()
{
  document.getElementById('ccostos').innerHTML = document.getElementById('costoinput').value;
}



function imprimecredencial(url1, url2, folio, pagado, estado, incidente)
{
  i1 = url1; //document.getElementById('ine1').src;
  i2 = url2;//document.getElementById('ine2').src;
  //  display: inline-block;      display: inline-block;  <div style="float:right;">   </div>

  var fecha = document.getElementById('fechares').innerHTML;
  var persona = document.getElementById('benefres').innerHTML;
  var cantidad1 = document.getElementById('importeres').innerHTML;
  var cantidad2 = document.getElementById('palabres').innerHTML;
  var concepto = document.getElementById('concepto').innerHTML;

  var tm = concepto.length / 75;
  var concmodificado = "";


  if (tm > 1)
  {
      var cnt01 = 0;
      var cnt02 = 75;

      for (var j = 0; j < tm; j++)
      {
        concmodificado += concepto.substring(cnt01, cnt02) + " <br> ";
        cnt01 += 75;
        cnt02 += 75;
      }

      cnt01 = 0;
      cnt02 = 0;
  }
  else
  {
    concmodificado = concepto;
  }

  switch (estado)
  {
    case "0":
    estado = " SIN COBRAR ";
      break;
    case "1":
    estado = " PAGADO: " + pagado;
      break;
    case "2":
    estado = " CON INCIDENTE: " + incidente;
      break;
    default:
  }


var header = '<div style="padding-top: 50px;display: inline-block; width:100%; "><image style="display: inline-block;width:30%;align:left; padding-left: 30px; " src="http://189.240.62.234:55/turnados/images/logocultura.png"><p style="display: inline-block;float: right; padding-right: 40px; right;font-size:12px;  text-align: center; "><strong style="color: #717171;">DIRECCIÓN GENERAL <br>DE ADMINISTRACIÓN Y FINANZAS</strong></p></div>';
var footer = '<div style="padding-top: 210px;display: inline-block; width:100%; "><p style="display: inline-block;width:50%;align:left; margin-top:-48px; text-align: center; " ><strong style="color: #717171;font-size:12px;">COORDINACIÓN DE FINANZAS </strong></p><p style="display: inline-block;align: right;font-size:12px; margin-top: -30px; text-align:center"><strong style="color: #717171;">JEFATURA DE UNIDAD DEPARTAMENTAL<br>DE CONTROL PRESUPUESTAL</strong></p></div>';
var footer2 = '<div style="padding-top: 0px;display: inline-block; width:100%; "><p style="display: inline-block;width:100%; padding-top:0px; text-align: center;" ><strong style="color: #717171;font-size:12px;">TECNOLOGÍAS DE LA INFORMACIÓN<br>Y TELECOMUNICACIONES</strong></p> </div>';
  var datos = '<div style="width:100%; display: inline-block; padding-top: 100px; padding-left:100px;"><div style="width:30%; display: inline-block;font-family: \'Agency FB\'; font-size: 13px;">FOLIO DE CHEQUE: </div><div style="display: inline-block;font-family: \'Agency FB\'; font-size: 16px;"><strong>'+folio+'</strong></div></div> <br><br> <div style="width:100%; display: inline-block; padding-left:100px;"><div style="width:30%; display: inline-block;font-family: \'Agency FB\'; font-size: 13px;">EMISIÓN DE CHEQUE: </div><div style="display: inline-block;font-family: \'Agency FB\'; font-size: 16px;"><strong>'+fecha+'</strong></div> <br><br> </div><div style="width:100%; display: inline-block; padding-left:100px;"><div style="width:30%; display: inline-block;font-family: \'Agency FB\'; font-size: 13px;">CONCEPTO: </div><div style="display: inline-block;font-family: \'Agency FB\'; font-size: 16px;"><strong>'+concmodificado+'</strong></div> <br><br></div><div style="width:100%; display: inline-block; padding-left:100px;"><div style="width:30%; display: inline-block;font-family: \'Agency FB\'; font-size: 13px;">CANTIDAD: </div><div style="display: inline-block;font-family: \'Agency FB\'; font-size: 16px;"><strong>'+cantidad1+'</strong></div></div><br><br><div style="width:100%; display: inline-block; padding-left:100px;"><div style="width:30%; display: inline-block;font-family: \'Agency FB\'; font-size: 13px;">CANTIDAD: </div><div style="display: inline-block;font-family: \'Agency FB\'; font-size: 16px;"><strong>'+cantidad2+'</strong></div> <br> </div><div style="width:100%; display: inline-block; padding-left:100px;"><div style="width:30%; display: inline-block;font-family: \'Agency FB\'; font-size: 13px;">ESTADO: </div><div style="display: inline-block;font-family: \'Agency FB\'; font-size: 16px;"><strong>'+estado+'</strong></div></div> <br><br>';
  var src = '<div style="width: 100%; display: inline-block; padding-top: 50px;"><div style="float:left;"><img style="width:49%;" src="' + i1 + '">   <img style="width:49%;" src="'+ i2 +'">     </div></div>';

  w = window.open();
  w.document.write(header + datos + src + footer + footer2);
  w.document.close();
  w.focus();
  w.print();
  w.close();
  return true;

}
