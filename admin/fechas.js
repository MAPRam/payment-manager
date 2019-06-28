function boton(){var btn1 = document.getElementById('fechainicio').value;var btn2 = document.getElementById('fechafinal').value;if (btn1 != "" && btn2 != ""){document.getElementById('generareporte').disabled = false;}else{document.getElementById('generareporte').disabled = true;}}
function fechamala(){swal("ERROR", "LAS FECHAS ESTÁN MAL :(", "warning");}


function genera()
{
  var fecha1 = document.getElementById("fechainicio").value; var fecha2 = document.getElementById("fechafinal").value;
  var arr1 = fecha1.split("/"); var arr2 = fecha2.split("/");
  fecha1 = arr1[2] + "-" + arr1[1] + "-" + arr1[0]; fecha2 = arr2[2] + "-" + arr2[1] + "-" + arr2[0];

  var fechatmp = fecha1;
  var fechatmp2 = fecha2;

  fecha1 = moment(fecha1);
  fecha2 = moment(fecha2);

  var diferencia =  fecha2.diff(fecha1, 'days');

    if (diferencia > 0)
    {
        document.getElementById('borrareporte').disabled = false;
        var datos = new FormData();

        datos.append('inicio',fechatmp);
        datos.append('fin', fechatmp2);

        fetch('php/reporte.php', {
          method: 'POST',
          body: datos
        })
        .then( res => res.json())
        .then( data => {
          console.log(data);
        })
    }

    else
    {
      fechamala();
    }




}
