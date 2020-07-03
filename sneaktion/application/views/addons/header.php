<?php 
?>
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
    .carousel-item img {
 
      height: 300px;
        width: 300px;
        object-fit: contain;
}
.transparan{
  background-color: rgba(255, 255, 255, 0);
}
    .carousel-caption{
  opacity:0;
  transition:200ms ease-in-out;
}
.carousel-item:hover .carousel-caption{
  opacity:1;
}
.carousel-item:hover img{
  filter:blur(2px);
  transition:300ms ease-in-out;
}
/* Centered text */
.thumbnail {
    position: relative;
}
.thumbnail img{
  filter:blur(1px);
}
.caption {
    position: absolute;
    top: 45%;
    left: 0;
    width: 100%;
    opacity:1;
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
             </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
               foreach($admin->result() as $row){
                
              if($row->negara == "Indonesia"){

                echo "<i class='flag-icon flag-icon-id'></i>";

              }elseif($row->negara == "Singapore"){

                echo "<i class='flag-icon flag-icon-sg'></i>";

              }elseif($row->negara == "Timor Leste"){

                echo "<i class='flag-icon flag-icon-tl'></i>";

              }elseif($row->negara == "Malaysia"){

                echo "<i class='flag-icon flag-icon-my'></i>";

              }
            } ?>
              <span class="selected-language"></span></a>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"> 
              <img src="<?php foreach($admin->result() as $row){ echo base_url("uploads/".$row->image); }?>"  width="50" height="60" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?php foreach($admin->result() as $row){ echo base_url("uploads/".$row->image); }?>"><span class="user-name text-bold-700 ml-1"><?php foreach($admin->result() as $row){ echo $row->username; }?></span></span></a>
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


  
