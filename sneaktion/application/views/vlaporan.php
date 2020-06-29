
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard - SNEAKTION | Sneaker Comparison</title>
    <link rel="apple-touch-icon" href="<?php echo base_url('theme-assets/images/ico/apple-icon-120.png')?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('theme-assets/images/ico/logos.png')?>">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme-assets/css/custom.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme-assets/css/vendors.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme-assets/css/chat.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme-assets/vendors/css/charts/chartist.css')?>">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme-assets/css/app-lite.css')?>">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme-assets/css/core/menu/menu-types/vertical-menu.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme-assets/css/core/colors/palette-gradient.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('theme-assets/css/pages/dashboard-ecommerce.css')?>">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <style>
    .thumbnail {
		padding:0px;
	}
	.panel-comment {
		position:relative;width:45%;
	}
	
	.panel-comment > .panel-heading{
		background-color:#E6E2E2 !important;
	}
	.panel-comment>.panel-heading:after,.panel>.panel-heading:before{
		position:absolute;
		top:11px;left:-16px;
		right:100%;
		width:0;
		height:0;
		display:block;
		content:" ";
		border-color:transparent;
		border-style:solid solid outset;
		pointer-events:none;
	}
	
	.panel-comment>.panel-heading:after{
		border-width:7px;
		border-right-color:#E6E2E2;
		margin-top:1px;
		margin-left:2px;
	}
	.panel-comment>.panel-heading:before{
		border-right-color:#ddd;
		border-width:8px;
  }

  .chatlist {
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}



  @media screen and (max-width: 640px) {
  .chatlist{
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
  }
  .chatbox{
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
  padding: 0 0 ;
  }
}

 
</style>
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu"  data-col="2-columns">

    <!-- fixed-top-->
    <nav style="background: black;" class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div style="background: black;" class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="<?php echo base_url('theme-assets/images/portrait/small/avatar-s-19.png');?>" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online">
                  <img src="<?php echo base_url('theme-assets/images/portrait/small/avatar-s-19.png'); ?>">
                  <span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url('login/logout')?>"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


  
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="<?php echo base_url('theme-assets/images/backgrounds/02.jpg')?>">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="<?php echo base_url('theme-assets/images/logo/logos.png')?>"/>
              <h3 class="brand-text">Sneaktion</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <?php 
          $url =  $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
          <li class="<?php  
          if($url == "localhost/sneaktion/admin/home")
          echo 'active';
          else
          echo 'nav-item';
         ?>"><a href="<?php echo base_url('admin/home')?>"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class="<?php
          if($url == "localhost/sneaktion/admin/laporan")
          echo 'active';
          else
          echo 'nav-item';
           ?>"><a href="<?php echo base_url('admin/laporan')?>"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Laporan</span></a>
          </li>
          <li class="<?php
          if($url == "localhost/sneaktion/admin/user")
          echo 'active';
          else
          echo 'nav-item';
           ?>"><a href="<?php echo base_url('admin/user')?>"><i class="la la-user"></i><span class="menu-title" data-i18n="">User</span></a>
          </li>
          <li class="<?php
          if($url == "localhost/sneaktion/admin/chat")
          echo 'active';
          else
          echo 'nav-item';
           ?>"><a href="<?php echo base_url('admin/chat')?>"><i class="ft-message-circle"></i><span class="menu-title" data-i18n="">Chat</span></a>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"><img src="<?php echo base_url('theme-assets/images/coversneaktion.png')?>" width="100%"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Charts</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Charts
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Bar charts section start -->
<section id="chartjs-bar-charts">
    <!-- Column Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Column Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="column-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bar Chart -->
<!--     
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bar Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="bar-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
//bar end

// line char mulai
<section id="chartjs-line-charts">
    //line chart
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Line Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body chartjs">
                            <div class="height-500">
                        <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
// line chart end

// pie chart
<section id="chartjs-pie-charts">
    <div class="row">
        //simple pie chart
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Pie Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="simple-pie-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        //simple donat chart
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Doughnut Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="simple-doughnut-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section> -->
<!-- // Pie charts section end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer>
    <script src="<?php echo base_url('theme-assets/vendors/js/vendors.min.js')?>" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url('theme-assets/vendors/js/charts/chart.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/vendors/js/charts/chartist.min.js')?>" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?php echo base_url('theme-assets/js/core/app-menu-lite.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/core/app-lite.js')?>" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url('theme-assets/js/scripts/pages/dashboard-lite.js')?>" type="text/javascript"></script>
    <script src="<?php// echo base_url('theme-assets/js/scripts/charts/chartjs/bar/column.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/bar/bar.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/line/line.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('theme-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js')?>" type="text/javascript"></script>
    <!-- <script src="<?php// echo base_url('js/jss.js')?>" type="text/javascript"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(window).on("load", function(){

//Get the context of the Chart canvas element we want to select
var ctx = $("#column-chart");

// Chart Options
var chartOptions = {
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each bar to be 2px wide and green
    elements: {
        rectangle: {
            borderWidth: 2,
            borderColor: 'rgb(0, 255, 0)',
            borderSkipped: 'bottom'
        }
    },
    responsive: true,
    maintainAspectRatio: false,
    responsiveAnimationDuration:500,
    legend: {
        position: 'top',
    },
    scales: {
        xAxes: [{
            display: true,
            gridLines: {
                color: "#f3f3f3",
                drawTicks: false,
            },
            scaleLabel: {
                display: true,
            }
        }],
        yAxes: [{
            display: true,
            gridLines: {
                color: "#f3f3f3",
                drawTicks: false,
            },
            scaleLabel: {
                display: true,
            }
        }]
    },
    title: {
        display: true,
        text: 'Chart.js Bar Chart'
    }
};

// Chart Data
<?php  ?>
var chartData = {
        
    datasets: [{
        label: "Proses",
        data: [<?php $jumlah = $prosses->num_rows(); 
        echo $jumlah ?>,],
        backgroundColor: "#28D094",
        hoverBackgroundColor: "rgba(40,208,148,.9)",
        borderColor: "transparent"
    }, {
        label: "Selesai",
        data: [<?php $jumlah1 = $selesai->num_rows(); 
        echo $jumlah1 ?>],
        backgroundColor: "#FF4961",
        hoverBackgroundColor: "rgba(255,73,97,.9)",
        borderColor: "transparent"
    }]
};

var config = {
    type: 'bar',

    // Chart Options
    options : chartOptions,

    data : chartData
};

// Create the chart
var lineChart = new Chart(ctx, config);
});
</script>

    <!-- END PAGE LEVEL JS-->
    </body>
</html>
