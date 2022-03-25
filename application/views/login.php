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
                 <label class="form-label" for="form2Example11">Admin Name</label>
                    <input type="type"  name="first_name" id="form2Example11" class="form-control" placeholder="Please Enter Your Name"/>
                    
                    <span class="text-danger"><?php echo form_error('first_name'); ?></span> 
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