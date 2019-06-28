


function nodato()
{
  swal("ERROR", "ALGÚN CAMPO VACÍO :)", "warning");
}

function login()
{
  swal({
  title: "Bienvenido!",
  text: "Usuario válido en el sistema",
  icon: "success",
  button: "Entrar!",
});
}


function nomatch()
{
  swal("ERROR", "El usuario no existe :)", "error");
}


var login = document.getElementById('login');


login.addEventListener('click', function (e) {
  e.preventDefault();

  var correo = document.getElementById('email').value;
  var password = document.getElementById('password').value;

  var datos = new FormData();

  datos.append('usuario', correo);
  datos.append('password', password);

    fetch('login.php',{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {

        if (data == 'nodata')
        {
          console.log(data);
          nodato();
        }

        else if (data == 'nomatch')
        {
          console.log(data);
          nomatch();
        }
        else if (data == 'login')
        {
          console.log(data);
          //login();
          location.href = 'admin/index.php';
        }

    })

})
