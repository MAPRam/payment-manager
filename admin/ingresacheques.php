<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>PAYMENT MANAGER</title>
  <!-- Favicon-->
  <link rel="shortcut icon" href="http://189.240.62.234:55/resources/login/images/avatar-01.ico" type="image/x-icon">
  <link rel="icon" href="http://189.240.62.234:55/resources/login/images/avatar-01.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/3.4.1/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-5HAjBLBhXAArWyyh/bPaIK9FKMqOGhu8g6tf5ARGMvuNWuvpY38SFgqCCl+bG3Gk" crossorigin="anonymous">
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/node-waves/waves.css" rel="stylesheet" />
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/animate-css/animate.css" rel="stylesheet" />
  <link href="http://189.240.62.234:55/resources/controlcheques/css/style.css" rel="stylesheet">
  <link href="http://189.240.62.234:55/resources/controlcheques/css/themes/all-themes.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/3.4.1/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-5HAjBLBhXAArWyyh/bPaIK9FKMqOGhu8g6tf5ARGMvuNWuvpY38SFgqCCl+bG3Gk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/dropzone/dropzone.css" rel="stylesheet">
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/multi-select/css/multi-select.css" rel="stylesheet">
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
  <link href="http://189.240.62.234:55/resources/controlcheques/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
  <script src="js/encode.js"></script>





    <?php
    session_start();

    if($_SESSION['payment'] != true)
        {
            header("Location: ../");
        }
    ?>
</head>

<body class="theme-teal">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Espera un momento...</p>
        </div>
    </div>

    <div class="overlay"></div>


    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>


    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"><strong>PAYMENT MANAGER:</strong> Control de cheques </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info justify-content-center">
                <div class="image ">
                    <img class="bg-light-blue" src="avatar/<?php echo $_SESSION["avatar"]; ?>" width="60" height="60" alt="User" />
                </div>

                <div class="info-container">
                    <div class="name" style="color: white; font-weight: bold;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["usuario"] . " " . $_SESSION["apellidop"]; ?></div>
                    <div class="email" style="color: white; font-weight: bold;"><?php echo $_SESSION["correo"] ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Favoritos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../logout.php"><i class="material-icons">input</i>Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>INICIO</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">note_add</i>
                            <span>Agregar</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active bg-lime">
                                <a href="ingresacheques.php">Agregar Cheques</a>
                            </li>
                            <li>
                                <a href="ingresapersona.php">Agregar Personas</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">print</i>
                            <span>Reportes</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="desplieguecheque.php">Imprimir desglose de cheque</a>
                            </li>
                            <li>
                                <a href="generareportes.php">Generar Reportes</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                  <a href="" style="font-size:9px;">TECNOLOGÍAS DE LA INFORMACIÓN Y TELECOMUNICACIONES</a><br>
                  <a href="" style="font-size:9px;">JUD: Control Presupuestal</a><br>
                  <a href="" style="font-size:9px;">COORDINACIÓN DE FINANZAS</a></div>
                <div class="version" style="font-size:9px;"><b>Version: </b> 1.0.5 &copy; 2019</div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </section>

     <section class="content">
        <div class="container-fluid">


            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card bg-secondary">
                        <div class="header">
                            <div class="row clearfix">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">

                                  <p class="h3" style="color: teal"><strong>AGREGAR CHEQUES</strong></p>
                                  <p>NOTA: LOS DATOS DEBEN ESTAR ESTRUCTURADOS DE LA SIGUIENTE FORMA</p>
                                  <p style="color: red;">| CUENTA | FOLIO | FECHA DE CHEQUE | BENEFICIARIO | IMPORTE | CONCEPTO |</p>

                              </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">



                                </div>

                            </div>

                        </div>
                        <div class="body">


                          <div class="">


                            <script type="text/javascript">
                                      function Upload()
                                      {
                                          var fileUpload = document.getElementById("fileUpload");
                                          var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;

                                          if (regex.test(fileUpload.value.toLowerCase()))
                                          {
                                              if (typeof (FileReader) != "undefined")
                                              {
                                                  var reader = new FileReader();
                                                  reader.onload = function (e)
                                                  {
                                                      var table = document.createElement("table");
                                                      var rows = e.target.result.split("\n");
                                                      for (var i = 0; i < rows.length; i++)
                                                      {
                                                        console.log('cantidades');
                                                        var cells = rows[i].split(",");

                                                          if (i>0 && i < rows.length - 1)
                                                          {
                                                            var modificada = cantidades(rows[i]);
                                                            if (cells.length > 1)
                                                            {
                                                                var row = table.insertRow(-1);
                                                                for (var j = 0; j < cells.length; j++)
                                                                {
                                                                    var cell = row.insertCell(-1);
                                                                    cell.innerHTML = cells[j];
                                                                }
                                                            }
                                                            console.log(modificada);
                                                            console.log("");
                                                            console.log("metodos");
                                                            //console.log(Utf8.encode(modificada));
                                                            //console.log(Utf8.encode(modificada));
                                                            console.log("");
                                                            subecheque(modificada);
                                                          }
                                                      }
                                                  }
                                                  reader.readAsText(fileUpload.files[0]);
                                              }
                                              else
                                              {
                                                  alert("This browser does not support HTML5.");
                                              }
                                          }
                                          else
                                          {
                                              alert("Please upload a valid CSV file.");
                                          }
                                      }




                                      function cantidades(cadena)
                                      {
                                        console.log('ENTRA A FUNCION');
                                        //console.log(cadena);
                                        var filter = /"([^"]*)"|'([^"]*)'/g;
                                        var filtrotmp = cadena.match(filter);
                                        var filtro = cadena.match(filter);
                                        var temp = cadena.match(filter);

                                        if (filtro == null)
                                        {
                                          return cadena;
                                        }


                                        if ( filtro.length==1 )
                                        {
                                          filtro[0] = filtro[0].replace(',', '');
                                          filtro[0] = filtro[0].replace("\"", '');
                                          filtro[0] = filtro[0].replace("\"", '');
                                          var number = parseFloat(filtro[0]);

                                          cadena = cadena.replace(filtrotmp[0], number);
                                          console.log(cadena);
                                        }

                                        else if(filtro.length==2)
                                        {

                                          filtro[0] = filtro[0].replace(',', '');
                                          filtro[0] = filtro[0].replace("\"", '');
                                          filtro[0] = filtro[0].replace("\"", '');

                                          filtro[1] = filtro[1].replace(',', '');
                                          filtro[1] = filtro[1].replace("\"", '');
                                          filtro[1] = filtro[1].replace("\"", '');


                                            if ((!parseFloat(filtro[0])) && (parseFloat(filtro[1])))
                                            {

                                              filtrotmp[0] = filtrotmp[0].replace(',', ' A44');
                                              filtrotmp[0] = filtrotmp[0].replace("\"", '');
                                              filtrotmp[0] = filtrotmp[0].replace("\"", '');
                                              cadena = cadena.replace(temp[0], filtrotmp[0]);


                                              filtro[1] = filtro[1].replace(',', '');
                                              filtro[1] = filtro[1].replace("\"", '');
                                              filtro[1] = filtro[1].replace("\"", '');
                                              var number = parseFloat(filtro[1]);

                                              cadena = cadena.replace(filtrotmp[1], number);

                                              console.log(cadena);
                                            }
                                            else if ((parseFloat(filtro[0])) && (!parseFloat(filtro[1])))
                                            {
                                              //console.log(temp[1]);
                                              filtrotmp[1] = filtrotmp[1].replace(',', ' A44');
                                              filtrotmp[1] = filtrotmp[1].replace("\"", '');
                                              filtrotmp[1] = filtrotmp[1].replace("\"", '');
                                              cadena = cadena.replace(temp[1], filtrotmp[1]);

                                              filtro[0] = filtro[0].replace(',', '');
                                              filtro[0] = filtro[0].replace("\"", '');
                                              filtro[0] = filtro[0].replace("\"", '');
                                              var number = parseFloat(filtro[0]);

                                              cadena = cadena.replace(filtrotmp[0], number);

                                              console.log(cadena);
                                            }
                                            else if ((!parseFloat(filtro[0])) && (!parseFloat(filtro[1])))
                                            {
                                              //console.log('BENEFICIARIO - CONCEPTO');
                                              //console.log(filtro);
                                            }

                                        }


                                        else if (filtro.length==3)
                                        {
                                          console.log("HAY TRES");

                                          filtrotmp[0] = filtrotmp[0].replace(',', ' A44');
                                          filtrotmp[0] = filtrotmp[0].replace("\"", '');
                                          filtrotmp[0] = filtrotmp[0].replace("\"", '');
                                          cadena = cadena.replace(temp[0], filtrotmp[0])


                                          filtro[1] = filtro[1].replace(',', '');
                                          filtro[1] = filtro[1].replace("\"", '');
                                          filtro[1] = filtro[1].replace("\"", '');
                                          var number = parseFloat(filtro[1]);
                                          cadena = cadena.replace(temp[1], number);

                                          filtrotmp[2] = filtrotmp[2].replace(',', ' A44');
                                          filtrotmp[2] = filtrotmp[2].replace("\"", '');
                                          filtrotmp[2] = filtrotmp[2].replace("\"", '');
                                          cadena = cadena.replace(temp[2], filtrotmp[2]);

                                        }

                                        return cadena;

                                      }





                                    function subecheque(arreglo)
                                    {
                                      console.log('FUNCTION SUBECHEQUE');
                                      console.log(arreglo);
                                      arreglo = arreglo;
                                      var h4 = document.createElement("p");
                                      //var br = document.createElement("br");
                                      var mensajes = document.getElementById("mensajes");

                                      var datos = new FormData();
                                      datos.append('datos', arreglo);

                                      fetch('php/datoscheque.php', {
                                        method: 'POST',
                                        body: datos
                                      })
                                      .then( res => res.json())
                                      .then(data => {

                                        if (data == 'error')
                                        {
                                          var estilo = document.createAttribute('class');
                                          estilo.value = 'bg-danger';
                                          h4.setAttributeNode(estilo);
                                          var txt = document.createTextNode( arreglo + ' :  ERROR, ESTA PERSONA NO ES BENEFICIARIA');
                                          h4.appendChild(txt);
                                          mensajes.appendChild(h4);
                                        }
                                        else if( data == 'noingresa')
                                        {
                                          var estilo = document.createAttribute('class');
                                          estilo.value = 'bg-warning';
                                          h4.setAttributeNode(estilo);
                                          var txt = document.createTextNode( arreglo + ' :  ERROR, CHEQUE NO AGREGADO, INTENTA MAS TARDE. si el problema continúa envía un correo con captura de pantalla a: marcopascualr@outlook.com');
                                          h4.appendChild(txt);
                                          mensajes.appendChild(h4);
                                        }
                                        else if (data == 'existe')
                                        {
                                          var estilo = document.createAttribute('class');
                                          estilo.value = 'bg-primary';
                                          h4.setAttributeNode(estilo);
                                          var txt = document.createTextNode( arreglo + ' :  ERROR, EL CHEQUE CON ESTE FOLIO YA SE ENCUENTRA REGISTRADO');
                                          h4.appendChild(txt);
                                          mensajes.appendChild(h4);
                                        }
                                        else if (data == 'hecho')
                                        {
                                          var estilo = document.createAttribute('class');
                                          estilo.value = 'bg-success';
                                          h4.setAttributeNode(estilo);
                                          var txt = document.createTextNode( arreglo + ' :  ÉXITO, CHEQUE AGREGADO CORRECTAMENTE');
                                          h4.appendChild(txt);
                                          mensajes.appendChild(h4);
                                        }

                                      })
                                    }

                                  </script>
                                  <input type="file" id="fileUpload" />
                                  <input type="button" id="upload" value="Upload" onclick="Upload()" />
                                  <hr />
                                  <div id="dvCSV">
                                  </div>
                                  <div id="mensajes">

                                  </div>


                          </div>


                        </div>
                    </div>
                </div>
            </div>




        </div>
    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/jquery/jquery.min.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap/js/bootstrap.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/node-waves/waves.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/jquery-countto/jquery.countTo.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/raphael/raphael.min.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/morrisjs/morris.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/chartjs/Chart.bundle.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/flot-charts/jquery.flot.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/flot-charts/jquery.flot.time.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/plugins/jquery-sparkline/jquery.sparkline.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/js/admin.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/js/pages/index.js"></script>
<script src="http://189.240.62.234:55/resources/controlcheques/js/demo.js"></script>
</body>

</html>
