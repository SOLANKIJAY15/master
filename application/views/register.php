<?php 
include("header.php");
?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
<head>
=======
<<<<<<< HEAD
<head>
=======
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
>>>>>>> 2624b000ff7eccfdd63ac74c04eccee9fb5b6caa
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
    <style>
         .error{
            color: #D8000C;
            background-color: #FFBABA;
         }
      </style>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
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
                        
                        let email = $('#email').val();
                        var ml = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                        if(email.match(ml)){    
                            passerror = true;
                            $('#valid_email').remove();
                        }else{
                            
                            $('#lastname_error').after("<lable id='valid_email' style='color:red;'> please enter valid email </lable>");
                            return false;
                        }

                        let password = $('#password').val();
                        var pas =/^[A-Za-z0-9]+$/;
                        if(password.match(pas)){
                            passerror = true;
                            $('#valid_password').remove();
                        }else{
                            $('#password_error').after("<lable id='valid_password' style='color:red;'> please enter password </lable>");
                            return false;
                        }

                        let conform_password = $('#conform_password').val();
                        var pas =/^[A-Za-z0-9]+$/;
                        if(conform_password.match(pas)){
                            passerror = true;
                            $('#valid_conform_password').remove();
                        }else{
                            $('#conform_password_error').after("<lable id='valid_conform_password' style='color:red;'> please enter Conform Password </lable>");
                            return false;
                        }


                        var ps1 = $('#password').val();
                        
                        var cs1 = $('#conform_password').val();
                        if (ps1 != cs1) {
                            $('#conform_password_error').after("<lable id='valid_conform_password' style='color:red;'> DOES NOT MATCH PASSWORD </lable>");
                            return false;
                        }
                        else{
                            $('#valid_conform_password').remove();
                        }
                    
                    
                        let file = $('#file').val();
                    
                        if(file){
                            passerror = true;
                            $('#valid_image').remove();
                        }else{
                            $('#image_error').after("<lable id='valid_image' style='color:red;'> please enter Image </lable>");
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

                        let phone_no = $('#phone_no').val();
                        var phn =/^[0-9]+$/;
                        if(phone_no.match(phn)){
                            passerror = true;
                            $('#valid_phone_no').remove();
                        }else{
                            $('#phone_no_error').after("<lable id='valid_phone_no' style='color:red;'> please 10 NUMBERS ONLY! </lable>");
                            return false;
                        }


                        let pin_code = $('#pin_code').val();
                        var pin =/^[0-9]+$/;
                        if(pin_code.match(pin)){
                            passerror = true;
                            $('#valid_pin_code').remove();
                        }else{
                            $('#pin_code_error').after("<lable id='valid_pin_code' style='color:red;'> please ENTER 6 numbers only </lable>");
                            return false;
                        }
<<<<<<< HEAD

=======

=======
         
        <script> 
        $(document).ready(function() {
            // function validateForm(e) {
            $('#myForm').submit(function(e) {


                e.preventDefault();
                let passerror = false;
>>>>>>> 2624b000ff7eccfdd63ac74c04eccee9fb5b6caa
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
                
                        
                        if(error>0) {
                            return false;
                        }
                        
                        return passerror;
                    }
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
<<<<<<< HEAD

                $(document).on('change keypress', '#first_name', function(){
                    setTimeout(function(){
                    
                    $("#valid_firstname").remove();  
                    }, 1500);           
                });

=======

                $(document).on('change keypress', '#first_name', function(){
                    setTimeout(function(){
                    
                    $("#valid_firstname").remove();  
                    }, 1500);           
                });

>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
                
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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
                $(document).on('change keypress', '#last_name', function(){
                    setTimeout(function(){
                    
                    $("#valid_lastname").remove();  
                    }, 1500);           
                });

<<<<<<< HEAD

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
=======

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
=======
                let password = $('#password').val();
                var pas =/^[A-Za-z0-9]{12}+$/;
                if(password.match(pas)){
                    passerror = true;
                    $('#valid_password').remove();
                }else{
                    $('#password_error').after("<lable id='valid_password' style='color:red;'> please enter password </lable>");
                    return false;
                }

                let conform_password = $('#conform_password').val();
                var pas =/^[A-Za-z0-9]{12}+$/;
                if(conform_password.match(pas)){
                    passerror = true;
                    $('#valid_conform_password').remove();
                }else{
                    $('#conform_password_error').after("<lable id='valid_conform_password' style='color:red;'> please enter Conform Password </lable>");
                    return false;
>>>>>>> 2624b000ff7eccfdd63ac74c04eccee9fb5b6caa
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
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
<<<<<<< HEAD
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
=======
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


<<<<<<< HEAD
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
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
                        return false;
                    }
                }

<<<<<<< HEAD
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
=======
                $(document).on('change keypress', '#pin_code', function(){
                    setTimeout(function(){
                    
                    $("#valid_pin_code").remove();  
                    }, 1500);           
                });

                
</script>
</head>
=======
                let pin_code = $('#pin_code').val();
                var pin =/^[1-9][0-9]{6}$/;
                if(pin_code.match(pin)){
                    passerror = true;
                    $('#valid_pin_code').remove();
                }else{
                    $('#pin_code_error').after("<lable id='valid_pin_code' style='color:red;'> please ENTER 6 numbers only </lable>");
                    return false;
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
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

                
<<<<<<< HEAD
</script>
</head>
=======
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
>>>>>>> 2624b000ff7eccfdd63ac74c04eccee9fb5b6caa
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
<body>
<section class="vh-150 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
<<<<<<< HEAD
           
         

            <form name="myForm"  method="post" onsubmit="return validateForm()" enctype='multipart/form-data' action="<?php echo base_url().'index.php/User_Register/add_register'; ?>"> 
            
=======
            // REGISTER FORM START 
         
<<<<<<< HEAD

            <form name="myForm"  method="post" onsubmit="return validateForm()" enctype='multipart/form-data' action="<?php echo base_url().'index.php/User_Register/add_register'; ?>"> 
            
=======
            <!--  -->
            <form name="myForm" id="myForm" action="<?php echo base_url().'index.php/User_Register/add_register'; ?>" method="post"> 
>>>>>>> 2624b000ff7eccfdd63ac74c04eccee9fb5b6caa
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
            <br><br>
            <div class="row">
            <div class="col-md-6 mb-4 pb-2">
                    <div class="form-group">
                        <label class="form-label">Country</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<<<<<<< HEAD
                            <select class="form-control" name="type">
=======
<<<<<<< HEAD
                            <select class="form-control" name="type">
=======
                            <select class="form-control" name="type" >
>>>>>>> 2624b000ff7eccfdd63ac74c04eccee9fb5b6caa
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
                                <option value="1" disabled>Choose option</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                                
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
                        <input type="password"  onkeypress="return passwordOnly(event)"  id="password" name="password" class="form-control form-control-lg" minlength="8" maxlength="12" value="<?php echo set_value('password'); ?>" />
                        <div style="color:red;"><?php echo form_error('password'); ?>
                        </div>
<<<<<<< HEAD
                        <div  class="error password_error" id="password_error"></div>
                    </div> 
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label" >Conform password</label>
                        <input type="password" id="conform_password" onkeypress="return conformpasswordOnly(event)" minlength="8" maxlength="12"name="conform_password" class="form-control form-control-lg"  value="<?php echo set_value('conform_password'); ?>"/>
                        <div style="color:red;"><?php echo form_error('conform_password'); ?>
=======
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <a href="<?php echo $base.' ';?>" class="mdc-button mdc-button--raised w-100">
                            Register
                          </a>
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
                        </div>
                        <div  class="error conform_password_error" id="conform_password_error"></div>
                    </div> 
                </div>
                
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                        <label class="form-label">Upload image</label>    
                        <b><?php if(isset($response)) echo $response; ?></b>
                        <input class="form-control form-control-lg" id="image"  name="file"  type="file" value="<?php echo set_value('image'); ?>" />
                           
                            
                    </div>
                <div style="color:red;"><?php echo form_error('file'); ?></div>
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
                        <label class="form-label" >Country</label>
                        <select class="form-control"  id="con_id" name="con_id" onkeypress="return countryOnly(event)">

                        <?php if(!empty($country)) { 
                            foreach($country as $country1){ ?>
                                
                                <option value="<?php echo $country1['con_id'];?>"><?php echo $country1['name'];?></option>
                                <?php } } else {
                              echo "data not found"  ;
                            } ?>
                        
                       



                             
                            </select>
                    </div>
                    
                </div>
            </div>


            <div class="row">
             <div class="col-md-6 mb-4 pb-2">
                    <div class="form-group">
                        
                         <label class="form-label" >State</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                        <select class="form-control" id="state_id" name="state_id" >
                        <?php if(!empty($state)) { 
                            foreach($state as $state1){ ?>
                                
                                <option value="<?php echo $state1['con_id'];?>"><?php echo $state1['name'];?></option>
                                <?php } } else {
                              echo "data not found"  ;
                            } ?>
<<<<<<< HEAD
                             
=======
<<<<<<< HEAD
                             
=======


>>>>>>> 2624b000ff7eccfdd63ac74c04eccee9fb5b6caa
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
                        </select>
                    </div>
                   
                </div> <div style="color:red;"><?php echo form_error('2'); ?></div>

                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-group">
                        <label class="form-label" >City</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                        <select class="form-control" id="city_id" name="city_id" >
                        
                      
                        <?php if(!empty($city)) { 
                            foreach($city as $city1){ ?>
                                
                                <option value="<?php echo $city1['con_id'];?>"><?php echo $city1['name'];?></option>
                                <?php } } else {
                              echo "data not found"  ;
                            } ?>
                        

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
                    <div style="color:red;"><?php echo form_error('street_address'); ?></div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text"  id="pin_code"  name="pin_code" class="form-control form-control-lg"
                        onkeypress="return pincodeOnly(event)" value="<?php echo set_value('pin_code'); ?>"
                        minlength="5" maxlength="5"/>
                        <label class="form-label" >Pin code</label>
                            <div style="color:red;"><?php echo form_error('pin_code'); ?>
                            </div>
                             <div  class="error pin_code_error" id="pin_code_error">
                             </div>
                    </div>    
                </div>
            </div>

           
<<<<<<< HEAD
              <!-- <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" name="save" />
              
              </div> -->
=======
            
>>>>>>> 2624b000ff7eccfdd63ac74c04eccee9fb5b6caa

              <input type="submit" style="
  background-color: red;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
<<<<<<< HEAD
" class="btn" value="submit" name="save">
=======
<<<<<<< HEAD
" class="btn" value="submit" name="save">Submit
=======
" class="btn" value="save" name="save"/>  
>>>>>>> 2624b000ff7eccfdd63ac74c04eccee9fb5b6caa
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384

            </form>

            <script>
$(document).ready(function(){
 $('#con_id').change(function(){
  var con_id = $('#con_id').val();
  if(con_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>RegisterModel/country",
    method:"POST",
    data:{con_id:con_id},
    success:function(data)
    {
     $('#state_id').html(data);
     $('#city_id').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#state_id').html('<option value="">Select State</option>');
   $('#city_id').html('<option value="">Select City</option>');
  }
 });

 $('#state_id').change(function(){
  var state_id = $('#state_id').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>RegisterModel/city",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#city_id').html(data);
    }
   });
  }
  else
  {
   $('#city').html('<option value="">Select City</option>');
  }
 });
 
});
</script>

            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
