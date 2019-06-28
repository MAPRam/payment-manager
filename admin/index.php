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

<!--    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="js/sweetalert2.all.min.js"></script>
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
                    <li class="active">
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
                        <ul class="ml-menu">
                            <li>
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
                  <a href="" style="font-size:9px;">DEPARTMENT OF INFORMATION TECHNOLOGIES AND TELECOMMUNICATIONS</a><br>
                  <a href="" style="font-size:9px;">CHIEF OF THE BUDGETARY CONTROL UNIT</a><br>
                  <a href="" style="font-size:9px;">FINANCE COORDINATION</a></div>
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

            <!-- Widgets -->
            <div class="row clearfix">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect" onclick="historialpagados();">
                        <div class="icon">
                            <i class="material-icons">check_circle</i>
                        </div>
                        <div class="content">
                            <div class="text"><strong class="h4">PAGADOS</strong></div>
                            <div id="cobrados" class="number count-to" data-from="0" data-to="10" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect" onclick="historialcancelados();">
                        <div class="icon">
                            <i class="material-icons">cancel</i>
                        </div>
                        <div class="content">
                            <div class="text"><strong class="h4">CANCELADOS</strong></div>
                            <div id="restantes" class="number count-to" data-from="0" data-to="10" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect" onclick="mescheques();">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text"><strong class="h4">PAGADOS/MES</strong></div>
                            <div id="cheques" class="number count-to" data-from="0" data-to="10" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue-grey hover-expand-effect" onclick="totalpersonas();">
                        <div class="icon">
                            <i class="material-icons">supervised_user_circle</i>
                        </div>
                        <div class="content">
                            <div class="text"><strong class="h4">BENEFICIARIOS</strong></div>
                            <div id="persona" class="number count-to" data-from="0" data-to="10" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card bg-light"> <!-- bg-cyan -->
                        <div class="header">
                            <div class="row clearfix">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">

                                  <p class="h3" style="color: rgb(0,150,136);"><strong>BUSCAR</strong></p>

                              </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">

                                    <input id="buscador" class="form-control" type="search" placeholder="Buscar" aria-label="Search" onkeyup="busca();">

                                </div>

                            </div>

                        </div>
                        <div class="body">


                          <table class="table table-hover table-dark">
                              <thead>
                                <tr>
                                  <th style="font-size: 16;" scope="col">BENEFICIARIO</th>
                                  <th style="font-size: 16;" scope="col">SOLICITAR INFO</th>
                                </tr>
                              </thead>
                              <tbody id=tabla>


                              </tbody>
                            </table>
                            <div id="alerta">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- #END# CPU Usage -->

            <div class="row clearfix">
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8  align-self-center">
                <div class="bg-amber" style="visibility: hidden; display: inline-block; width: 70%;" id="nmb" >
                    <strong><p class="font-bold" id="usernomb" value="sdf" style="text-transform: uppercase; font-size: 150%; color:black;"></p></strong>
                </div>
                <button style="visibility: hidden; display: inline-block;" id="imprimecredencial" class="btn btn-info" type="button" name="button" onclick="imprimecredencial()">PRINT IDENTIFICATION</button>
              </div>
            </div>






<!--INCIDENCIAS-->

<div class="row clearfix">
    <!-- Task Info -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card bg-light"> <!-- bg-light-green -->
            <div class="header">
                <h2 style="color: rgb(0,150,136);"><strong>CHEQUES REGISTRADOS</strong></h2>
                <ul class="header-dropdown m-r--5">

                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover  table-dark">
                        <thead>
                            <tr>
                                <th style="font-size: 16;">FOLIO</th>
                                <th style="font-size: 16;">CONCEPTO</th>
                                <th style="font-size: 16;">CUENTA</th>
                                <th style="font-size: 16;">IMPORTE</th>
                                <th style="font-size: 16;">OPERACIONES</th>
                            </tr>
                        </thead>
                        <tbody id="chequereg">


                        </tbody>
                    </table>
                </div>
                <div id="alerta2">

                </div>
            </div>
        </div>
    </div>
    <!-- #END# Task Info -->
    <!-- Browser Usage -->

    <!-- #END# Browser Usage -->
</div>


<!--END INCIDENCIAS-->


            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-light"> <!-- bg-light-green -->
                            <div class="m-b--35 font-bold">
                                <p class="h3" style="color: rgb(0,150,136);"><strong>CREDENCIAL FRONTAL</strong></p>
                            </div>
                            <br>
                            <hr>
                            <img class="img-fluid" id="ine1" style="width: 100%; height:100%;" src="" alt="">
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->


                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-light"> <!-- bg-cyan -->
                            <div class="m-b--35 font-bold"> <p style="color: rgb(0,150,136);" class="h3"><strong>CREDENCIAL</strong></p></div>
                            <br>
                            <hr>
                            <img id="ine2" class="img-fluid" style="width: 100%; height:100%;" src="" alt="">
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-light"> <!-- bg-teal -->
                            <div class="font-bold m-b--35">  <p style="color: rgb(0,150,136);" class="h3"><strong>CHEQUES CANCELADOS</strong> </p> </div>
                            <br>
                            <hr>
                            <ul class="dashboard-stat-list" id="dashboardretenido">


                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->


            </div>


        </div>
    </section>






<script src="app.js"></script>
<script src="busca.js"></script>
<script src="showdata.js"></script>

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
