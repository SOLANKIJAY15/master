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
        $(document).ready(function() {
            // function validateForm(e) {
            $('#myForm').submit(function(e) {
                e.preventDefault();
                let passerror = false;
                
                /* START FIRST NAME VALIDATION*/
                let first_name_length = $('#first_name').val();
                if(!first_name_length){
                    $('#firstname_error').after("<lable id='valid_firstname' style='color:red;'> please enter First Name </lable>");
                    return false;
                }else{
                    passerror = true;
                }
                
                if(first_name_length.length <=2){ 
                    $('#firstname_error').after("<lable id='valid_firstname' style='color:red;'> please enter at least five character </lable>");
                    return false;
                }else{
                    $('#valid_firstname').remove();
                }
                /*END START FIRST NAME VALIDATION*/

                let last_name_nlength = $('#last_name').val();
                var ls = /^[A-Za-z]+$/;
                if(last_name_nlength.match(ls)){
                    passerror = true;
                    $('#valid_lastname').remove();
                }else{
                    $('#lastname_error').after("<lable id='valid_lastname' style='color:red;'> please enter last name </lable>");
                    return false;
                }

                /* START EMAIL FORM VALIDATION*/
                var ml = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                let email = $('#email').val();
                if(document.myForm.email.value.match(ml)){
                    passerror = true;
                    $('#valid_email').remove();
                }else{
                    
                    $('#lastname_error').after("<lable id='valid_email' style='color:red;'> please enter valid email </lable>");
                    return false;
                }

                var pas =/^[A-Za-z0-9]+$/;
                document.getElementById('password').innerHTML = '';
                if(document.myForm.password.value.match(pas)){
                    //return true;
                }else{
                alert("enter valid password");
                    return false;
                }



                var con_pas =/^[A-Za-z0-9]+$/;
                document.getElementById('conform_password').innerHTML = '';
                if(document.myForm.conform_password.value.match(con_pas)){
                    //return true;
                }else{
                    alert("enter valid password");
                    return false;
                }
            
                var ps1 = document.myForm.password.value;
                console.log("ent",ps1);
                var cs1 = ddocument.myForm.conform_password.value;
                console.log("hh",cs1);
                return false;
                if (ps1 != cs1) {
                    alert("Passwords do not match.");
                    return false;
                }
                else{
                    //return true;
                }
                return false;
            
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
                var phn =/^[0-9]+$/;
                document.getElementById('phone_no').innerHTML = '';
                if(document.myForm.phone_no.value.match(phn)){
                    return true;
                }else{
                    alert("Enter Only NUMBERS");
                    return false;
                }
                if( document.myForm.street_address.value == "" ) 
                {
                    alert( "Please provide your street address!" );
                        document.myForm.street_address.focus() ;
                    return false;
                }
                var pin =/^[0-9]+$/;
                document.getElementById('pin_code').innerHTML = '';
                if(document.myForm.pin_code.value.match(pin)){
                    return true;
                }else{
                    alert("Enter Only 6 NUMBERS");
                    return false;
                }
                if(error>0) {
                    return false;
                }
                
                return passerror;
            });
        });
           
        
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
            if ((charCode >= 64 && charCode < 91) || (charCode >= 46 && charCode <= 57) || (charCode > 96 && charCode < 123) || charCode == 8){
                
                return true;
                $("#valid_password").remove();             
            }else{ 
                $("#valid_password").remove();
                $('.password_error').after("<lable id='valid_password' style='color:red;'> please enter Password in only A-Za-z0-9 @  </lable>");
                return false;
            }
        }

        $(document).on('change keypress', '#password', function(){
            setTimeout(function(){
             
            $("#valid_password").remove();  
            }, 1500);           
        });
       //Conform Password Form validation
        function conformpasswordOnly(){
            
            var charCode = event.keyCode;
            if ((charCode >= 64 && charCode < 91) || (charCode >= 46 && charCode <= 57) || (charCode > 96 && charCode < 123) || charCode == 8){
                
                return true;
                $("#valid_conform_password").remove();             
            }else{ 
                $("#valid_conform_password").remove();
                $('.conform_password_error').after("<lable id='valid_conform_password' style='color:red;'> please enter conform Password in only A-Za-z0-9 @ </lable>");
                return false;
            }
        }

        $(document).on('change keypress', '#conform_password', function(){
            setTimeout(function(){
             
            $("#valid_conform_password").remove();  
            }, 1500);           
        });


        function phoneNoOnly(){
            
            var charCode = event.keyCode;
            if (charCode >= 48 && charCode <= 57 ){
                
                return true;
                $("#valid_phone_no").remove();             
            }else{ 
                $("#valid_phone_no").remove();
                $('.phone_no_error').after("<lable id='valid_phone_no' style='color:red;'> please Enter Only Numbers </lable>");
                return false;
            }
        }

        $(document).on('change keypress', '#phone_no', function(){
            setTimeout(function(){
             
            $("#valid_phone_no").remove();  
            }, 1500);           
        });
        
        function pincodeOnly(){
            
            var charCode = event.keyCode;
            if (charCode >= 48 && charCode <= 57 ){
                
                return true;
                $("#valid_pin_code").remove();             
            }else{ 
                $("#valid_pin_code").remove();
                $('.pin_code_error').after("<lable id='valid_pin_code' style='color:red;'> please Enter Only 6 Numbers </lable>");
                return false;
            }
        }

        $(document).on('change keypress', '#pin_code', function(){
            setTimeout(function(){
             
            $("#valid_pin_code").remove();  
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
         
            <!-- <form name="myForm" id="myForm" action="" method="post">  -->
            <form id="myForm" method="post" action="">
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
                        <div style="color:red;"><?php echo form_error('email'); ?>
                        </div>
                        <div  class="error email_error" id="email_error"></div> 
                    </div>
                </div>
              
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" >password</label>
                        <input type="password"  onkeypress="return passwordOnly(event)"  id="password" name="password" class="form-control form-control-lg" value="<?php echo set_value('password'); ?>" />
                        <div style="color:red;"><?php echo form_error('password'); ?>
                        </div>
                        <div  class="error password_error" id="password_error"></div>
                    </div> 
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" >Conform password</label>
                        <input type="password" id="conform_password" onkeypress="return conformpasswordOnly(event)" name="conform_password" class="form-control form-control-lg"  value="<?php echo set_value('conform_password'); ?>"/>
                        <div style="color:red;"><?php echo form_error('conform_password'); ?>
                        </div>
                        <div  class="error conform_password_error" id="conform_password_error"></div>
                    </div> 
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
                        <input type="text" name="phone_no" id="phone_no" 
                        onkeypress="return phoneNoOnly(event)"  class="form-control form-control-lg"  value="<?php echo set_value('phone_no'); ?>" minlength="9" maxlength="10" size="10"/>
                        <div style="color:red;"><?php echo form_error('phone_no'); ?></div>
                        <div  class="error phone_no_error" id="phone_no_error"></div>
                  </div>
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
                        <input type="number" maxlength="6" id="pin_code"  name="pin_code" class="form-control form-control-lg"
                        onkeypress="return pincodeOnly(event)" value="<?php echo set_value('pin_code'); ?>"/>
                        <label class="form-label" >Pin code</label>
                            <div style="color:red;"><?php echo form_error('pin_code'); ?>
                            </div>
                             <div  class="error pin_code_error" id="pin_code_error">
                             </div>
                    </div>    
                </div>
            </div>

           
              <!-- <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div> -->

                <!-- <input type="submit" style="
  background-color: red;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
" class="btn"  value="Submit" name="save">Submit -->
<input type="submit" value="Submit" />
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </body>
    </html>
