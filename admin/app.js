  var hist = setInterval(historiacheques, 4000);

      function historiacheques()
      {
        var cob1 = document.querySelector('#cobrados');
        var cob2 = document.querySelector('#restantes');
        var cob3 = document.querySelector('#cheques');
        var cob4 = document.querySelector('#persona');

        //var cob1 = document.getElementById('cobrados');
        //var cob2 = document.getElementById('restantes');

        var q1 = 1;
        var datos = new FormData();
        datos.append("q", q1);


        fetch('php/cobrados.php',{
              method: 'POST',
              body: datos
        })

        .then( res => res.json())
        .then( data => {
        if (data == 'error')
        {
          console.log(`${data}`);
        }
        else
        {
          var res = data.split(" ");

          cob1.setAttribute("data-to", res[0]);
          cob2.setAttribute("data-to", res[1]);
          cob3.setAttribute("data-to", res[2]);
          cob4.setAttribute("data-to", res[3]);
          cob1.innerHTML = res[0];
          cob2.innerHTML = res[1];
          cob3.innerHTML = res[2];
          cob4.innerHTML = res[3];
        }

      })
      }
