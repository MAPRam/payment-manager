function enviado()
{
  swal("ÉXITO", "Persona registrada correctamente :)", "success");
}

function error()
{
  swal("ERROR", "No se ha registrado correctamente :(", "error");
}


var formulario = document.getElementById("formulario");


formulario.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formulario);
    var ap = datos.get('apellidop');
    var am = datos.get('apellidom');
    var nm = datos.get('nombre');

    if (ap.endsWith(" ") == true) {ap = ap.slice(0, -1);}
    if (am.endsWith(" ") == true) {am = am.slice(0, -1);}
    if (nm.endsWith(" ") == true) {nm = nm.slice(0, -1);}
    if (ap.endsWith(" ") == true) {ap = ap.slice(0, -1);}
    if (am.endsWith(" ") == true) {am = am.slice(0, -1);}
    if (nm.endsWith(" ") == true) {nm = nm.slice(0, -1);}
    if (ap.endsWith(" ") == true) {ap = ap.slice(0, -1);}
    if (am.endsWith(" ") == true) {am = am.slice(0, -1);}
    if (nm.endsWith(" ") == true) {nm = nm.slice(0, -1);}

    datos.set('apellidop', ap);
    datos.set('apellidom', am);
    datos.set('nombre', nm);


    fetch('php/datospersona.php',{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {

        if (data == 'error')
        {
            formulario.reset();
            enviado();
        }
        else
        {
            console.log(data);
            formulario.reset();
            enviado();
        }
    })




})
