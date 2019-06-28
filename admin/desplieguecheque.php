<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PAYMENT MANAGER</title>
    <link rel="shortcut icon" href="http://189.240.62.234:55/resources/login/images/avatar-01.ico" type="image/x-icon">
    <link rel="icon" href="http://189.240.62.234:55/resources/login/images/avatar-01.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/multi-select/css/multi-select.css" rel="stylesheet">
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="http://189.240.62.234:55/resources/controlcheques/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
    <link href="http://189.240.62.234:55/resources/controlcheques/css/style.css" rel="stylesheet">
    <link href="http://189.240.62.234:55/resources/controlcheques/css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <link href="http://allfont.es/allfont.css?fonts=agency-fb" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="print.css" media="print">



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
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>

    <!--
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">Buscar</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">Cerrar</i>
        </div>
    </div>

    -->

    <!-- #END# Search Bar -->
    <!-- Top Bar -->
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
                    <li class="header">OPCIONES</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                          <i class="material-icons">search</i>
                          <span>BÚSQUEDAS</span>
                        </a>
                        <ul class="ml-menu">
                          <li class="active bg-lime">
                            <a href="index.php">CHEQUES DEL MES</a>
                          </li>
                          <li>
                            <a href="mesesanteriores.php">CHEQUES ANTERIORES</a>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">add_circle</i>
                            <span>AGREGAR</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="ingresacheques.php">AGREGAR CHEQUES</a>
                            </li>
                            <li>
                                <a href="ingresapersona.php">AGREGAR BENEFICIARIO</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">print</i>
                            <span>REPORTES</span>
                        </a>
                        <ul class="ml-menu active">
                            <li class="active">
                                <a href="desplieguecheque.php">IMPRIMIR CHEQUES Y PÓLIZAS</a>
                            </li>
                            <li>
                                <a href="generareportes.php">REPORTE GENERAL</a>
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
          <!--APARTADO PARA SELELECCIONAR EL FOLIO DEL CHEQUE-->
          <div class="row clearfix">

              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                  <div class="card">
                      <div class="body bg-light">
                          <div class="m-b--35 font-bold">
                              <p class="h3" style="color: rgb(0,150,136);"><strong>REPORTE POR CHEQUE</strong></p>
                          </div>
                          <br>
                          <hr>
                          <div class="body">
                            <div class="">
                              <label >FOLIO</label>
                              <input type="text" name="folio" id="folio" value="" onkeyup="return numeros(event)" placeholder="Numero de folio de cheque">
                              <button class="btn btn-success" type="button" id="genera" name="button">Generar</button>
                              <button class="btn btn-danger" type="button" id="borra" name="button" onclick="location.href='desplieguecheque.php'" disabled>Borrar</button>
                              <button class="btn btn-warning" type="button" id="exporta" name="button" onclick="pruebaDivAPdf()" disabled>Exportar</button>
                              <button class="btn btn-warning" type="button" id="imprime" name="button" onclick="imprim1(imprimir)" disabled>Imprimir</button>
                            </div>



                          </div>
                      </div>

                  </div>
              </div>

          </div>


<script>
function numeros(e)
{
  var key = window.Event ? e.which : e.keyCode
  return (key >= 48 && key <= 57)
}

</script>




            <div class="row clearfix" id="resultado" style="visibility: hidden;"> <!-- style="display: none"-->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card bg-light">
                        <div class="header">
                            <div class="row clearfix">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">

                                  <p class="h3" style="color: rgb(0,150,136);"><strong>RESULTADO</strong></p>
                                  <hr>
                              </div>



                              <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                  <div class="form-group green-border-focus">
                                    <label for="exampleFormControlTextarea5">ESCRIBE EL CONCEPTO</label> &nbsp; <button class="btn btn-primary" type="button" name="button" onclick="negrita()">NEGRITA</button> <button class="btn btn-success" type="button" name="button" id="print1">IMPRIME CREDENCIAL</button>
                                    <textarea onkeyup="conceptoarea()" style="border: 1px solid; resize: none;" class="form-control" id="conceptotextarea" rows="4"></textarea>

                                  </div>

                                <form>

                                <!--  <div class="form-group row">
                                    <label for="inputtext" class="col-sm-2 col-form-label">No. C.L.C.</label>
                                    <div class="col-sm-10">
                                      <input style="border-bottom: 1px solid;" onkeyup="clc()" type="text" class="form-control" id="clcinput" placeholder="Escribe">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputtext" class="col-sm-2 col-form-label">FOLIO</label>
                                    <div class="col-sm-10">
                                      <input style="border-bottom: 1px solid;" onkeyup="folio1()" type="text" class="form-control" id="folioinput1" placeholder="Escribe">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputtext" class="col-sm-2 col-form-label">No. RECIBO</label>
                                    <div class="col-sm-10">
                                      <input style="border-bottom: 1px solid;" onkeyup="recibo()" type="text" class="form-control" id="reciboinput" placeholder="Escribe">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="inputtext" class="col-sm-2 col-form-label">CENTRO DE COSTO</label>
                                    <div class="col-sm-10">
                                      <input style="border-bottom: 1px solid;" onkeyup="costo()" type="text" class="form-control" id="costoinput" placeholder="Escribe">
                                    </div>
                                  </div> -->

                                  </form>


                              </div>



                                <div id="imprimir" class="col-xs-12 col-sm-12 col-md-12 col-xl-12"  >

                                  <!-- <a href="javascript:pruebaDivAPdf()" class="button">Pasar a PDF</a> -->
                                    <div style=" font-size: 10px;font-family: sans-serif;  padding-top: -50px;">

                                      <!--
                                      <div style="width: 100%; align: center;">
                                        <div style="display: inline-block;"><strong>FOLIO:</strong></div>
                                        <div id="foliores" style="display: inline-block;"></div>
                                      </div> -->

                                      <div style="width: 100%; padding-top: 60px;">
                                        <!-- <div style="display: inline-block;"><strong>FECHA:</strong></div>   padding-left: 600px -->
                                        <div style="display: inline-block; padding-left: 570px; font-family: 'Agency FB'; font-size: 16px; padding-top:7px;" id="fechares"></div> <!--  style="display: inline-block; float: right;"  -->
                                      </div>

                                      <div style="width: 100%; padding-top: 35px; padding-left: 40px;">
                                      <!--  <div style="display: inline-block;"><strong>BENEFICIARIO:</strong></div> -->
                                        <div style="display: inline-block; width: 70%; font-family: 'Agency FB'; font-size: 16px; padding-top:5px;" id="benefres">dfdsf</div>
                                        <div style="display: inline-block; padding-left: 40px; margin-top: -45px; font-family: 'Agency FB'; font-size: 16px;" id="importeres"></div>
                                      </div>

                                      <!--
                                      <div style="width: 100%;">
                                      <div style="display: inline-block; " id="importeres"></div>
                                    </div> -->

                                      <div style="width: 100%; padding-top: 30px; padding-left: 40px;">
                                      <!--  <div style="display: inline-block;"><strong>IMPORTE:</strong></div> -->
                                      <div style="display: inline-block; font-family: 'Agency FB'; font-size: 14px;" id="palabres"></div>
                                      </div>

                                    </div>



                                    <div style="font-size: 10px; padding-top: 172px; font-family: 'Agency FB', arial;">


                                      <div style="width: 100%; display: inline-block; padding-left: 40px; padding-top: 2px;">
                                        <div style="display: inline-block; width: 70%;"><pre style="font-family: 'Agency FB'; padding-top: 14px;font-size: 12px;" id="concepto"></pre></div>
                                        <div style="display: inline-block; position: static;"><strong> </strong></div>
                                      </div>

                                      <div style="width: 100%; display: inline-block; padding-top: 170px;">
                                        <div style="display: inline-block; width: 30%;">


                                          <!--
                                          <div>
                                            <div style="display: inline-block; width: 100%;background-color:rgb(231,231,235); border-right: 1px solid;">
                                              <div style="display: inline-block; width: 50%;background-color:rgb(231,231,235);">
                                                <p> <strong>NO: C.L.C.</strong></p> <p id="clc"></p>
                                              </div>
                                              <div style="display: inline-block;background-color:rgb(231,231,235);">
                                                <p><strong>NO. DE RECIBO: </strong></p> <p id="recibo1"></p>
                                              </div>
                                              </div>
                                          </div>

                                          <div>
                                            <div style="display: inline-block; width: 100%;background-color:rgb(231,231,235); border-right: 1px solid;">
                                              <div style="display: inline-block; width: 50%;background-color:rgb(231,231,235);">
                                                <p> <strong>FOLIO </strong></p> <p id="folioinput"></p>
                                              </div>
                                              <div style="display: inline-block;background-color:rgb(231,231,235);">
                                                <p><strong>CENTRO DE COSTOS: </strong></p> <p id="ccostos"></p>
                                              </div>
                                              </div>
                                          </div>
                                        -->

                                        </div>
                                        <div style="display: inline-block;  position: static;"><strong> </strong></div>
                                      </div>

                                      <div style="width: 100%; display: inline-block;">
                                        <div style="display: inline-block; width: 70%;"> &nbsp;</div>
                                        <div style="display: inline-block;  position: static;"><strong> </strong></div>
                                      </div>




                                    </div>


                                    <div style=" font-family: 'Agency FB', arial;">


                                      <div style="width: 100%; display: inline-block; padding-left: 40px; ">
                                        <div style="display: inline-block; width: 30%;"><p style="font-family: 'Agency FB'; font-size: 16px;" id="cuenta"></p></div>
                                        <div style="display: inline-block;  width: 30%;  position: static; font-family: 'Agency FB'; font-size: 16px;">SANTANDER</div>
                                        <div style="display: inline-block;  position: static; font-family: 'Agency FB'; font-size: 16px; padding-left: 50px;" id="importeres2"></div>
                                      </div>


                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="body">

                            <div id="alerta">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                function pruebaDivAPdf() {
                    var pdf = new jsPDF('p', 'pt', 'letter');
                    source = $('#imprimir')[0];
                    //source = document.getElementById("imprimir");
                    specialElementHandlers = {
                        '#bypassme': function (element, renderer) {
                            return true
                        }
                    };
                    margins = {
                        top: 80,
                        bottom: 60,
                        left: 40,
                        width: 722
                    };

                    pdf.fromHTML(
                        source,
                        margins.left, // x coord
                        margins.top, { // y coord
                            'width': margins.width,
                            'elementHandlers': specialElementHandlers
                        },

                        function (dispose) {
                            pdf.save('Reporte.pdf');
                        }, margins
                    );


                }



            function imprim1(imp1)
            {
                var printContents = document.getElementById('imprimir').innerHTML;
                w = window.open();

                w.document.write(printContents);
                // w.document.body.style= "margin-left: -10px;";
                w.document.close();
                w.focus();
            		w.print();
            		w.close();
                return true;
            }




            </script>


            <!-- #END# CPU Usage -->

            <div class="row clearfix">
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8  align-self-center">
                <div class="bg-amber" >
                    <strong><p class="font-bold" id="usernomb" style="text-transform: uppercase; font-size: 150%; color:black;"></p></strong>
                </div>
              </div>
            </div>


        </div>
    </section>

<script src="desplieguecheques.js"></script>

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
