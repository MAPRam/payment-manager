function validaEmail()
{

    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    console.log('NO');
    document.getElementById('login').disabled = true;
    }
    else
    {
      console.log('SÍ');
        document.getElementById('login').disabled = false;
    }

}
