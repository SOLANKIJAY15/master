<?php 
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <script>
        function validateForm() {
        let x = document.forms["myForm"]["first_name"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
        }
        </script>
    </head>
<body>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <!-- REGISTER FORM START -->
         
            <form name="myForm"  onsubmit="return validateForm()" action="<?php echo base_url().'User_Register/add_register'; ?>" method="post"> 
            <br><br>
            <div class="row">
            <div class="col-md-6 mb-4 pb-2">
                    <div class="form-group">
                        <label class="form-label">Country</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select class="form-control" >
                                <option value="1" disabled>Choose option</option>
                                <option value="2">User</option>
                                <option value="3">Admin</option>
                                
                            </select>
                    </div>
                </div></div>
            <!-- FIRST NAME LAST NAME INPUT -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control form-control-lg" value="<?php echo set_value('first_name'); ?>" />
                        <div style="color:red;"> <?php echo form_error('first_name'); ?> </div>
                    </div>
                   
                
            </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control form-control-lg"  />
                    </div>
                    <div style="color:red;"><?php echo form_error('last_name'); ?>
                </div> </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" />
                    </div>
                </div>
                <div style="color:red;"><?php echo form_error('email'); ?></div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" >password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  </div>
                </div>
                <div style="color:red;"><?php echo form_error('password'); ?></div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" >Conform password</label>
                        <input type="password" id="conform_password"  name="conform_password" class="form-control form-control-lg"  />
                  </div>
                </div>
                <div style="color:red;"><?php echo form_error('conform_password'); ?></div>
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label">Upload image</label>    
                        <input class="form-control form-control-lg" id="image"  name="image"  type="file" />
                    </div>
                </div>
                <div style="color:red;"><?php echo form_error('image'); ?></div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone_no" id="phone_no"  class="form-control form-control-lg" />
                  </div>
                  <div style="color:red;"><?php echo form_error('phone_no'); ?></div>
                </div>
                
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-group">
                        <label class="form-label" name="1">Country</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select class="form-control" >
                                <option value="1" disabled>Choose option</option>
                                <option value="2">Subject 1</option>
                                <option value="3">Subject 2</option>
                                <option value="4">Subject 3</option>
                            </select>
                    </div>
                    
                </div><div style="color:red;"><?php echo form_error('1'); ?></div>
            </div>


            <div class="row">
            <div class="col-md-6 mb-4 pb-2">
                    <div class="form-group">
                        <label class="form-label" name="2">State</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select class="form-control" >
                                <option value="1" disabled>Choose option</option>
                                <option value="2">Subject 1</option>
                                <option value="3">Subject 2</option>
                                <option value="4">Subject 3</option>
                            </select>
                    </div>
                   
                </div> <div style="color:red;"><?php echo form_error('2'); ?></div>
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-group">
                        <label class="form-label" name="3">City</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select class="form-control" >
                                <option value="1" disabled>Choose option</option>
                                <option value="2">Subject 1</option>
                                <option value="3">Subject 2</option>
                                <option value="4">Subject 3</option>
                            </select>
                    </div>
                  
                </div>  <div style="color:red;"><?php echo form_error('3'); ?></div>
            </div>
              
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" name="street_address" id="street_address"  class="form-control form-control-lg" />
                        <label class="form-label">Street Address</label>
                    </div>
                    
                </div><div style="color:red;"><?php echo form_error('street_address'); ?></div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="number" maxlength="6" id="pin_code"  name="pin_code" class="form-control form-control-lg" />
                        <label class="form-label" >Pin code</label>
                    </div>
                    
                </div><div style="color:red;"><?php echo form_error('pin_code'); ?></div>
            </div>

           
              <!-- <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div> -->

                <input type="submit" style="
  background-color: red;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
" class="btn"  value="Submit" name="save">Submit

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </body>
    </html>
