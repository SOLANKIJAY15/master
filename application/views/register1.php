<?php 
include("header.php");
?>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <!-- REGISTER FORM START -->
            <form action="<?php echo base_url().'User_Register/add_register'; ?>" method="post"> 
            <br><br>
            <!-- FIRST NAME LAST NAME INPUT -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label">Name</label>
                        <input type="text" name="username" class="form-control form-control-lg" />
                    </div>
                </div>
               
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg" />
                    </div>
                </div>
               
            </div>

          
            <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" name="mobile" class="form-control form-control-lg" />
                  </div>
                </div>
               
            </div>


            
              
          

           
              <!-- <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div> -->

                <button type="submit" style="
  background-color: red;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
" class="btn" name="save">Submit</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
