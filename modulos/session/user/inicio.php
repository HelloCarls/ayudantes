<?php  
include DIR_PATH.'/includes/functions.php';

$consul = new DbConsult;

$datos = $consul->web($_SESSION['id']);

if (is_null($datos['logo'])) {
  
  $logo = 'images/misc/team.png';

}else{

  $logo = 'imagenes/logos_web/'.$datos['logo'];

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

    <title>Dashboard - <?php echo $datos['nombre_web']; ?></title>

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
            <a href="index.php" class="logo"><img src="imagenes/logo.png" width="130"></a>
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

              <!--<h1 class="centrar" style="color: #000;">Bienvenido <?php echo $datos['nombre'].' '.$datos['apellido']; ?></h1>-->
              
              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                    <div class="row mtbox">
                      <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                        <div class="box1">
                  <span class="li_heart"></span>
                  <h3>933</h3>
                        </div>
                  <p>933 People liked your page the last 24hs. Whoohoo!</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_cloud"></span>
                  <h3>+48</h3>
                        </div>
                  <p>48 New files were added in your cloud storage.</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_stack"></span>
                  <h3>23</h3>
                        </div>
                  <p>You have 23 unread messages in your inbox.</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_news"></span>
                  <h3>+10</h3>
                        </div>
                  <p>More than 10 news were added in your reader.</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_data"></span>
                  <h3>OK!</h3>
                        </div>
                  <p>Your server is working perfectly. Relax &amp; enjoy.</p>
                      </div>
                    
                    </div><!-- /row mt -->  
                  
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn donut-chart">
                            <div class="white-header">
                    <h5>SERVER LOAD</h5>
                            </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-6 goleft">
                    <p><i class="fa fa-database"></i> 70%</p>
                  </div>
                            </div>
                <canvas id="serverstatus01" height="120" width="120" style="width: 120px; height: 120px;"></canvas>
                <script>
                  var doughnutData = [
                      {
                        value: 70,
                        color:"#68dff0"
                      },
                      {
                        value : 30,
                        color : "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                </script>
                          </div><!-- --/grey-panel ---->
                        </div><!-- /col-md-4-->
                        

                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn">
                            <div class="white-header">
                    <h5>TOP PRODUCT</h5>
                            </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-6 goleft">
                    <p><i class="fa fa-heart"></i> 122</p>
                  </div>
                  <div class="col-sm-6 col-xs-6"></div>
                            </div>
                            <div class="centered">
                    <img src="assets/img/product.png" width="120">
                            </div>
                          </div>
                        </div><!-- /col-md-4 -->
                        
            <div class="col-md-4 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="white-panel pn">
                <div class="white-header">
                  <h5>TOP USER</h5>
                </div>
                <p><img src="assets/img/ui-zac.jpg" class="img-circle" width="80"></p>
                <p><b>Zac Snider</b></p>
                <div class="row">
                  <div class="col-md-6">
                    <p class="small mt">MEMBER SINCE</p>
                    <p>2012</p>
                  </div>
                  <div class="col-md-6">
                    <p class="small mt">TOTAL SPEND</p>
                    <p>$ 47,60</p>
                  </div>
                </div>
              </div>
            </div><!-- /col-md-4 -->
                        

                    </div><!-- /row -->
                    
                            
          <div class="row">
            <!-- TWITTER PANEL -->
            <div class="col-md-4 mb">
                          <div class="darkblue-panel pn">
                            <div class="darkblue-header">
                    <h5>DROPBOX STATICS</h5>
                            </div>
                <canvas id="serverstatus02" height="120" width="120" style="width: 120px; height: 120px;"></canvas>
                <script>
                  var doughnutData = [
                      {
                        value: 60,
                        color:"#68dff0"
                      },
                      {
                        value : 40,
                        color : "#444c57"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                </script>
                <p>April 17, 2014</p>
                <footer>
                  <div class="pull-left">
                    <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                  </div>
                  <div class="pull-right">
                    <h5>60% Used</h5>
                  </div>
                </footer>
                          </div><!-- -- /darkblue panel ---->
            </div><!-- /col-md-4 -->
            
            
            <div class="col-md-4 mb">
              <!-- INSTAGRAM PANEL -->
              <div class="instagram-panel pn">
                <i class="fa fa-instagram fa-4x"></i>
                <p>@THISISYOU<br>
                  5 min. ago
                </p>
                <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
              </div>
            </div><!-- /col-md-4 -->
            
            <div class="col-md-4 col-sm-4 mb">
              <!-- REVENUE PANEL -->
              <div class="darkblue-panel pn">
                <div class="darkblue-header">
                  <h5>REVENUE</h5>
                </div>
                <div class="chart mt">
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"><canvas style="display: inline-block; width: 232px; height: 75px; vertical-align: top;" width="232" height="75"></canvas></div>
                </div>
                <p class="mt"><b>$ 17,980</b><br>Month Income</p>
              </div>
            </div><!-- /col-md-4 -->
            
          </div><!-- /row -->
          
          <div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>VISITS</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top" style="height: 85%;"></div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top" style="height: 50%;"></div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top" style="height: 60%;"></div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top" style="height: 45%;"></div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top" style="height: 32%;"></div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top" style="height: 62%;"></div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top" style="height: 75%;"></div>
                          </div>
                      </div>
                      <!--custom chart end-->
          </div><!-- /row --> 
          
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>2 Minutes Ago</muted><br>
                             <a href="#">James Brown</a> subscribed to your newsletter.<br>
                          </p>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>3 Hours Ago</muted><br>
                             <a href="#">Diana Kennedy</a> purchased a year subscription.<br>
                          </p>
                        </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>7 Hours Ago</muted><br>
                             <a href="#">Brandon Page</a> purchased a year subscription.<br>
                          </p>
                        </div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>11 Hours Ago</muted><br>
                             <a href="#">Mark Twain</a> commented your post.<br>
                          </p>
                        </div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>18 Hours Ago</muted><br>
                             <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br>
                          </p>
                        </div>
                      </div>

                       <!-- USERS ONLINE SECTION -->
            <h3>TEAM MEMBERS</h3>
                      <!-- First Member -->
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="assets/img/ui-divya.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">DIVYA MANIAN</a><br>
                             <muted>Available</muted>
                          </p>
                        </div>
                      </div>
                      <!-- Second Member -->
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="assets/img/ui-sherman.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">DJ SHERMAN</a><br>
                             <muted>I am Busy</muted>
                          </p>
                        </div>
                      </div>
                      <!-- Third Member -->
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="assets/img/ui-danro.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">DAN ROGERS</a><br>
                             <muted>Available</muted>
                          </p>
                        </div>
                      </div>
                      <!-- Fourth Member -->
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="assets/img/ui-zac.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">Zac Sniders</a><br>
                             <muted>Available</muted>
                          </p>
                        </div>
                      </div>
                      <!-- Fifth Member -->
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="assets/img/ui-sam.jpg" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">Marcel Newman</a><br>
                             <muted>Available</muted>
                          </p>
                        </div>
                      </div>

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; margin-left: 33%; margin-top: -50px; width: 175px; display: none;" data-original-title="" title="">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="zabuto_calendar_28n"><div class="zabuto_calendar" id="zabuto_calendar_28n"><table class="table"><tbody><tr class="calendar-month-header"><th><div class="calendar-month-navigation" id="zabuto_calendar_28n_nav-prev"><span><span class="fa fa-chevron-left text-transparent"></span></span></div></th><th colspan="5"><span>November 2018</span></th><th><div class="calendar-month-navigation" id="zabuto_calendar_28n_nav-next"><span><span class="fa fa-chevron-right text-transparent"></span></span></div></th></tr><tr class="calendar-dow-header"><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr><tr class="calendar-dow"><td></td><td></td><td></td><td id="zabuto_calendar_28n_2018-11-01" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-01_day" class="day">1</div></td><td id="zabuto_calendar_28n_2018-11-02" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-02_day" class="day">2</div></td><td id="zabuto_calendar_28n_2018-11-03" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-03_day" class="day">3</div></td><td id="zabuto_calendar_28n_2018-11-04" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-04_day" class="day">4</div></td></tr><tr class="calendar-dow"><td id="zabuto_calendar_28n_2018-11-05" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-05_day" class="day">5</div></td><td id="zabuto_calendar_28n_2018-11-06" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-06_day" class="day">6</div></td><td id="zabuto_calendar_28n_2018-11-07" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-07_day" class="day">7</div></td><td id="zabuto_calendar_28n_2018-11-08" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-08_day" class="day">8</div></td><td id="zabuto_calendar_28n_2018-11-09" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-09_day" class="day">9</div></td><td id="zabuto_calendar_28n_2018-11-10" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-10_day" class="day">10</div></td><td id="zabuto_calendar_28n_2018-11-11" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-11_day" class="day">11</div></td></tr><tr class="calendar-dow"><td id="zabuto_calendar_28n_2018-11-12" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-12_day" class="day">12</div></td><td id="zabuto_calendar_28n_2018-11-13" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-13_day" class="day">13</div></td><td id="zabuto_calendar_28n_2018-11-14" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-14_day" class="day">14</div></td><td id="zabuto_calendar_28n_2018-11-15" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-15_day" class="day">15</div></td><td id="zabuto_calendar_28n_2018-11-16" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-16_day" class="day">16</div></td><td id="zabuto_calendar_28n_2018-11-17" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-17_day" class="day">17</div></td><td id="zabuto_calendar_28n_2018-11-18" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-18_day" class="day">18</div></td></tr><tr class="calendar-dow"><td id="zabuto_calendar_28n_2018-11-19" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-19_day" class="day">19</div></td><td id="zabuto_calendar_28n_2018-11-20" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-20_day" class="day">20</div></td><td id="zabuto_calendar_28n_2018-11-21" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-21_day" class="day">21</div></td><td id="zabuto_calendar_28n_2018-11-22" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-22_day" class="day">22</div></td><td id="zabuto_calendar_28n_2018-11-23" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-23_day" class="day">23</div></td><td id="zabuto_calendar_28n_2018-11-24" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-24_day" class="day">24</div></td><td id="zabuto_calendar_28n_2018-11-25" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-25_day" class="day">25</div></td></tr><tr class="calendar-dow"><td id="zabuto_calendar_28n_2018-11-26" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-26_day" class="day">26</div></td><td id="zabuto_calendar_28n_2018-11-27" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-27_day" class="day">27</div></td><td id="zabuto_calendar_28n_2018-11-28" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-28_day" class="day">28</div></td><td id="zabuto_calendar_28n_2018-11-29" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-29_day" class="day">29</div></td><td id="zabuto_calendar_28n_2018-11-30" class="dow-clickable"><div id="zabuto_calendar_28n_2018-11-30_day" class="day">30</div></td><td></td><td></td></tr></tbody></table><div class="legend" id="zabuto_calendar_28n_legend"><span class="legend-text"><span class="badge badge-event">00</span> Special event</span><span class="legend-block"><ul class="legend"><li class="event"></li><span>Regular event</span></ul></span></div></div></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
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
