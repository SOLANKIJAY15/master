<<<<<<< HEAD
<?php 
include("header.php");?>

<?php
    $base = $this->config->item("base_url");
  ?>

<!-- <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="<?php echo $base.'/assets/img/logo2.png';?>" style="width: 185px;" alt="logo">
                  
=======
<?php
  $base=$this->config->item('base_url');
  // print_r($base);
  // exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php $base=$this->config->item("base_url"); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Material Dash</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo $base.'assets/vendors/mdi/css/materialdesignicons.min.css';?>">
  <link rel="stylesheet" href="<?php echo $base.'assets/vendors/css/vendor.bundle.base.css';?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?php echo $base.'assets/css/demo/style.css';?>">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo $base.'assets/images/favicon.png';?>">
</head>
<body>
<script src="<?php echo $base.'assets/js/preloader.js';?>"></script>
  <div class="body-wrapper">
    <div class="main-wrapper">
      <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
        <main class="auth-page">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">           
            <div class="mdc-card">
              <div class="card-title"><h3>Welcome</h3></div> 
                <form method="POST" action="<?php echo base_url(); ?>index.php/Login_CI/login_validation">
                    <div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="text-field-hero-input" name="email">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label" >Email</label>
                          </div>
                          <span class="text-danger"><?php  echo form_error('email');?></span>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" type="password"  name="password" id="text-field-hero-input" >
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label" >Password</label>
                          </div>
                          <span class="text-danger"><?php  echo form_error('password');?></span>
                        </div>
                                                  
         <tr>
        	<td>Remember Me</td>
            <td><input type="checkbox" name="rm"></td>
        </tr>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-form-field">
                            <!-- <div class="mdc-checkbox">
                              <input type="checkbox"
                                      class="mdc-checkbox__native-control"
                                      id="checkbox-1"/>
                              <div class="mdc-checkbox__background">
                                <svg class="mdc-checkbox__checkmark"
                                      viewBox="0 0 24 24">
                                  <path class="mdc-checkbox__checkmark-path"
                                        fill="none"
                                        d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                </svg>
                                <!-- <div class="mdc-checkbox__mixedmark" name="rm"></div> -->
       
        
                              </div> -->
                            </div>
                           
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                          <a href="#">Forgot Password</a>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <input class="mdc-button mdc-button--raised w-100"
                             type="submit" name="insert" value="login">

                             <lable class="text-danger">   
                        <?php  
                        echo $this->session->flashdata("error");  
                        ?>  </lable>
                     
                        </div>
                      </div>
                    </div>
                  </form>
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
                </div>

                <form><br><br>
                <div class="text-center">
                <h1>LOGIN</h1></div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Username</label>
                    <input type="email" id="form2Example11" class="form-control" />
                   
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22" class="form-control" />
                   
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div>

                </form>

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

               
      
                <div class="text-center">
                  <img src="<?php echo $base.'/assets/img/logo2.png';?>" style="width: 185px;" alt="logo">
                  
                </div>
               <br><br>
               
                <form method="POST" action="<?php echo $base.'index.php/Login/login_validation';?>"> 
                 <div class="form-outline mb-4">
                 <label class="form-label" for="form2Example11">User Email</label>
                    <input type="email"  name="email" id="form2Example11" class="form-control" placeholder="Please Enter Your Email"/>
                    
                    <span class="text-danger"><?php echo form_error('email'); ?></span> 
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" name="password" id="form2Example22" class="form-control"  placeholder="Please Enter Password"/>
                   
                    <span class="text-danger"><?php echo form_error('password'); ?></span> 
                  </div>

                  <!-- <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div> -->

                  <!-- <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div> -->

                  <div class="form-group">  
                     <input type="submit" name="insert" value="Login" class="btn btn-info" />  
                     <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>  
                  </div>  

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
            <img src="<?php echo $base.'/assets/img/logo3.png';?>" style="width: 500px;" alt="logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    include("footer.php");
?>