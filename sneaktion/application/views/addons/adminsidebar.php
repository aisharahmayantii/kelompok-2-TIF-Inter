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