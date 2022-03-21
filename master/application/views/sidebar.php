<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php
    $base = $this->config->item("base_url");
  ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Material Dash</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo $base.'assets/vendors/mdi/css/materialdesignicons.min.css';?>">
  <link rel="stylesheet" href="<?php echo $base.'assets/vendors/css/vendor.bundle.base.css';?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo $base.'assets/vendors/flag-icon-css/css/flag-icon.min.css';?>">
  <link rel="stylesheet" href="<?php echo $base.'assets/vendors/jvectormap/jquery-jvectormap.css';?>">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?php echo $base.'assets/css/demo/style.css';?>">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo $base.'assets/images/favicon.png';?>" />
</head>
<body>
<script src="<?php echo $base.'assets/js/preloader.js';?>"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.php -->


  <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="<?php echo $base.' ';?>" class="brand-logo">
          <img src="<?php echo $base.'assets/images/logo2.png';?>" height="55px" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
          <div class="user-info">
            <!-- <p class="name">E shop</p> -->
            <!-- <p class="email">Eshop@about.us</p> -->
          </div>
        <div class="mdc-list-group">
        <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/dash' ;?>" >
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link"  data-toggle="expansionPanel"  href="<?php echo $base.'index.php/welcome/viewproduct';?>" data-target="sample-page-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">devices</i>
                Product
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="sample-page-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/product';?>">
                      ADD PRODUCT
                    </a>
                  </div>
                 
                </nav>
              </div>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/category';?>" >
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">sort</i>
                Category Master
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/brand';?>" >
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Brand Master
              </a>
            </div>
              <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/basic_tables';?>" >
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">list</i>
                Order Master
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#" >
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                User Master
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#" >
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">contacts</i>
                Contact Us
              </a>
            </div>
            <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/basic_forms';?>">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Forms
              </a>
            </div> -->
            <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                UI Features
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/buttons';?>">
                      Buttons
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/typography';?>">
                      Typography
                    </a>
                  </div>
                </nav>
              </div>
            </div>  -->
            <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/basic_tables';?>">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Tables
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/chartjs';?>">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
                Charts
              </a>
            </div> -->
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">settings</i>
                Account
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="sample-page-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <!-- <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/blank-page';?>">
                      Blank Page
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/403';?>">
                      403
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/404';?>">
                      404
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/500';?>">
                      500
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/505';?>">
                      505
                    </a>
                  </div> -->
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/login';?>">
                      Login
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="<?php echo $base.'index.php/welcome/register';?>">
                      Register
                    </a>
                  </div>
                </nav>
              </div>
            </div>
             <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="https://www.bootstrapdash.com/demo/material-admin-free/jquery/documentation/documentation.php" target="_blank">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
                Documentation
              </a>
            </div>  -->
          </nav>
        </div>
        <div class="profile-actions">
          <a href="javascript:;">Settings</a>
          <span class="divider"></span>
          <a href="javascript:;">Logout</a>
        </div>
        <!-- <div class="mdc-card premium-card">
          <div class="d-flex align-items-center">
            <div class="mdc-card icon-card box-shadow-0">
              <i class="mdi mdi-shield-outline"></i>
            </div>
            <div>
              <p class="mt-0 mb-1 ml-2 font-weight-bold tx-12">Material Dash</p>
              <p class="mt-0 mb-0 ml-2 tx-10">Pro available</p>
            </div>
          </div>
          <p class="tx-8 mt-3 mb-1">More elements. More Pages.</p>
          <p class="tx-8 mb-3">Starting from $25.</p>
          <a href="https://www.bootstrapdash.com/product/material-design-admin-template/" target="_blank">
						<span class="mdc-button mdc-button--raised mdc-button--white">Upgrade to Pro</span>
					</a>
          </div>
         </div> -->
    </aside>


     <!-- partial -->
