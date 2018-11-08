<?php  
include DIR_PATH.'/includes/functions.php';

$consul = new DbConsult;

$datos_web = $consul->web($_SESSION['id']);
$datos = $consul->web('*');

if (is_null($datos_web['logo'])) {
  
  $logo = 'images/misc/team.png';

}else{

  $logo = 'imagenes/logos_web/'.$datos_web['logo'];

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Dashboard - <?php echo $datos_web['nombre_web']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/ccs_dashboard/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="css/ccs_dashboard/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <link rel="stylesheet" type="text/css" href="js/js_dashboard/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="css/ccs_dashboard/lineicons/style.css">    
   
    <!-- Custom styles for this template -->
    <link href="css/ccs_dashboard/style.css" rel="stylesheet">
    <link href="css/ccs_dashboard/style-responsive.css" rel="stylesheet">

    <script src="js/js_dashboard/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
            <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="/" class="logo"><img src="imagenes/logo.png" width="130"></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Notificaciones del Sistema</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Perfil Completado</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            
                            <li class="external">
                              <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                           
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Mensajes</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login/logout.php">Salir</a></li>
            	</ul>
            </div>
      </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo $logo; ?>" class="img-circle" width="80" height='76' ></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['username']; ?></h5>
              	  	
                  <li class="">
                      <a href="index.html">
                      
                          <span>Mis Servicios</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="index.html">
                      
                          <span>Datos Personales</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="index.html">
                      
                          <span>Modificar Web</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="index.html">
                      
                          <span>Soporte</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="index.html">
                      
                          <span>Mis pagos</span>
                      </a>
                  </li>

                  <li class="">
                      <a href="index.html">
                      
                          <span>Contratar Servicio</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="index.html">
                      
                          <span>Estadisticas</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <section id="main-content">
          <section class="wrapper">

              <h1 class="centrar" style="color: #000;">Bienvenido <?php echo $datos_web['nombre'].' '.$datos_web['apellido']; ?></h1>

              
              <div class="content-panel" style="color: #000;">
                          <h4><i class="fa fa-angle-right"></i> Webs Registradas</h4><hr><table class="table table-striped table-advance table-hover">
                            
                            
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Web</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                                  <th><i class="fa fa-bookmark"></i> Visitas</th>
                                  <th><i class=" fa fa-edit"></i> Verification</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php for ($i=0; $i < each($datos['webs']); $i++) { ?>
                                  <tr>
                                      <td><a href="<?php echo $datos['webs'][$i]['URL']; ?>">
                                        <?php  
                                          echo $datos['webs'][$i]['nombre_web'];
                                        ?>
                                      </a></td>
                                      <td class="hidden-phone">
                                        <?php  
                                          echo $datos['webs'][$i]['descripcion'];
                                        ?>  
                                        </td>
                                      <td>
                                        <?php 
                                          echo 'Ninguna jaja';
                                        ?>
                                       </td>
                                      <td>
                                        <?php
                                          $consult = new DbConsult;

                                          $verified = $consult->User_d($datos['webs'][$i]['id_usuario']);

                                          if ($verified['verified']) {
                                            echo '<span class="label label-success label-mini">Si</span>';
                                          }else{
                                            echo '<span class="label label-warning label-mini">No</span>';
                                          }

                                          $consult = null;

                                        ?>
                                        </td>
                                      <td>
                                          <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      </td>
                                  </tr>
                                <?php  } ?>
                              </tbody>
                          </table>
                      </div>

          </section>
      </section>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
     

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/js_dashboard/jquery.js"></script>
    <script src="js/js_dashboard/jquery-1.8.3.min.js"></script>
    <script src="js/js_dashboard/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/js_dashboard/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/js_dashboard/jquery.scrollTo.min.js"></script>
    <script src="js/js_dashboard/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/js_dashboard/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="js/js_dashboard/common-scripts.js"></script>
    
    <script type="text/javascript" src="js/js_dashboard/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="js/js_dashboard/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="js/js_dashboard/sparkline-chart.js"></script>    
	<script src="js/js_dashboard/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">/*
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });*/
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
