<?php 
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <style>
         .error{
            color: #D8000C;
            background-color: #FFBABA;
         }
      </style>
         
        <script> 
        function validateForm() {
           
       //First Name Form Validation
            var first_name_length=document.myForm.first_name.value;

            var letters = /^[A-Za-z]+$/;
            document.getElementById('first_name').innerHTML = '';
            if(document.myForm.first_name.value.match(letters)){
                return true;
            }else{
               alert("enter alphabetic numbers");
                return false;
            }
        
            // if(first_name_length.length <=5){ 
            //     $('#firstname_error').after("<lable id='valid_firstname'> please enter number </lable>");
            //     return false;
            // }

            //var last_name_length=document.myForm.last_name.value;

            var ls = /^[A-Za-z]+$/;
            document.getElementById('last_name').innerHTML = '';
            if(document.myForm.last_name.value.match(ls)){
                return true;
            }else{
            alert("enter alphabetic numbers");
                return false;
            }




            var ml = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            document.getElementById('email').innerHTML = '';
            if(document.myForm.email.value.match(ml)){
                return true;
            }else{
            alert("enter valid email");
                return false;
            }

            var ps = /^[A-Za-z0-9@]+$/;
            document.getElementById('password').innerHTML = '';
            if(document.myForm.password.value.match(ps)){
                return true;
            }else{
            alert("enter valid password");
                return false;
            }

           


           
            if( document.myForm.conform_password.value == "") 
            {
                alert( "Please provide your conform password!" );
                    document.myForm.conform_password.focus() ;
                 return false;
            }
            if( document.myForm.image.value == "") 
            {
                alert( "Please provide your image!" );
                    document.myForm.image.focus() ;
                 return false;
            }

            // var phone = document.forms["myForm"]["phone_no"].value;
            // var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
            // if(phone.value.match(phoneNum)) {
            //     return true;
            // }
            // else {
            //     document.getElementById("phone_no").className = document.getElementById("phone_no").className + " error";
            //     return false;
            // }
            // var phone = document.forms["myForm"]["phone_no"].value;
            // var phone_no = /^\d{10}$/;
            if(  document.myForm.phone_no.value == "") 
            {
                alert( "Please provide your phone no!" );
                    document.myForm.phone_no.focus() ;
                 return false;
            }
            if( document.myForm.street_address.value == "" ) 
            {
                alert( "Please provide your street address!" );
                    document.myForm.street_address.focus() ;
                 return false;
            }
            if( document.myForm.pin_code.value == "" ) 
            {
                alert( "Please provide your pin code" );
                    document.myForm.pin_code.focus() ;
                 return false;
            }
            if(error>0) {
                return false;
            }
            return true;
            
        }
           
        
        function lettersOnly(){
            
            var charCode = event.keyCode;
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8){
                
                return true;
                $("#valid_firstname").remove();             
            }else{ 
                $("#valid_firstname").remove();
                $('.firstname_error').after("<lable id='valid_firstname' style='color:red;'> please enter Alphabetic Characters </lable>");
                return false;
            }
        }

        $(document).on('change keypress', '#first_name', function(){
            setTimeout(function(){
             
            $("#valid_firstname").remove();  
            }, 1500);           
        });

         
        function lslettersOnly(){
            
            var charCode = event.keyCode;
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8){
                
                return true;
                $("#valid_lastname").remove();             
            }else{ 
                $("#valid_lastname").remove();
                $('.lastname_error').after("<lable id='valid_lastname' style='color:red;'> please enter Alphabetic Characters </lable>");
                return false;
            }
        }

        $(document).on('change keypress', '#last_name', function(){
            setTimeout(function(){
             
            $("#valid_lastname").remove();  
            }, 1500);           
        });


        function emailOnly(){
            
            var charCode = event.keyCode;
            if ((charCode >= 64 && charCode < 91) || (charCode >= 46 && charCode < 57) || (charCode > 96 && charCode < 123) || charCode == 8){
                
                return true;
                $("#valid_email").remove();             
            }else{ 
                $("#valid_email").remove();
                $('.email_error').after("<lable id='valid_email' style='color:red;'> please enter Valid Email </lable>");
                return false;
            }
        }

        $(document).on('change keypress', '#email', function(){
            setTimeout(function(){
             
            $("#valid_email").remove();  
            }, 1500);           
        });

        function passwordOnly(){
            
            var charCode = event.keyCode;
            if ((charCode >= 64 && charCode < 91) || (charCode >= 46 && charCode < 57) || (charCode > 96 && charCode < 123) || charCode == 8){
                
                return true;
                $("#valid_email").remove();             
            }else{ 
                $("#valid_email").remove();
                $('.email_error').after("<lable id='valid_email' style='color:red;'> please enter Valid Email </lable>");
                return false;
            }
        }

        $(document).on('change keypress', '#email', function(){
            setTimeout(function(){
             
            $("#valid_email").remove();  
            }, 1500);           
        });


       

       
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
                        <input type="text" name="first_name" id="first_name" class="form-control form-control-lg" onkeypress="return lettersOnly(event)" value="<?php echo set_value('first_name'); ?>"/>
                        <div style="color:red;"> <?php echo form_error('first_name'); ?> </div>

                        <div  class="error firstname_error" id="firstname_error"></div>
                    </div>
                    
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" onkeypress="return lslettersOnly(event)"
                        id="last_name" class="form-control form-control-lg" value="<?php echo set_value('last_name'); ?>"  />
                    </div>
                    
                    <div style="color:red;"><?php echo form_error('last_name'); ?>
                   
                </div><div  class="error lastname_error" id="lastname_error"></div> </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" id="email" 
                        onkeypress="return emailOnly(event)" class="form-control form-control-lg" value="<?php echo set_value('email'); ?>" />
                        <div style="color:red;"><?php echo form_error('email'); ?></div>
                        <div  class="error email_error" id="email_error"></div> </div>
                    
                   
                </div>
              
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" >password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" value="<?php echo set_value('password'); ?>" />
                  </div><div style="color:red;"><?php echo form_error('password'); ?></div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" >Conform password</label>
                        <input type="password" id="conform_password"  name="conform_password" class="form-control form-control-lg"  value="<?php echo set_value('conform_password'); ?>"/>
                  </div>
                  <div style="color:red;"><?php echo form_error('conform_password'); ?></div>
                </div>
                
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label">Upload image</label>    
                        <input class="form-control form-control-lg" id="image"  name="image"  type="file" value="<?php echo set_value('image'); ?>" />
                    </div>
                <div style="color:red;"><?php echo form_error('image'); ?></div>
        </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone_no" id="phone_no"  class="form-control form-control-lg"  value="<?php echo set_value('phone_no'); ?>" minlength="9" maxlength="10" size="10"/>
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
                        <input type="text" name="street_address" id="street_address"  class="form-control form-control-lg" value="<?php echo set_value('street_address'); ?>" />
                        <label class="form-label">Street Address</label>
                    </div>
                    <div style="color:red;"><?php echo form_error('street_address'); ?></div></div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="number" maxlength="6" id="pin_code"  name="pin_code" class="form-control form-control-lg" value="<?php echo set_value('pin_code'); ?>"/>
                        <label class="form-label" >Pin code</label>
                    </div>
                    
            <div style="color:red;"><?php echo form_error('pin_code'); ?></div>
            </div>    </div>

           
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
