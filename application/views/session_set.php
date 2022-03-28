<<<<<<< HEAD
<?php 
    // $this->load->database();
		// $this->load->helper(array('cookie', 'url')); 
    // $this->load->library('form_validation');  
    // $this->load->library('session');

    $base=$this->config->item('base_url');
    $email=$this->session->userdata('email');
      if($email){
       
      }
      else{
       redirect(base_url() .'index.php/Login/userlogin');
       }

      // $cookie = $this->input->set_cookie('xyz','$email', '60');
      // if(!isset($_COOKIE[$cookie_name])){
      //       //  $data = array( 'message' => 'cookie successfully set');
      //        redirect(base_url() . 'index.php/Dashboard/index');
      //     }
      //     else{
      //         // $data = array( 'message' => 'Something went wrong while creating cookie');
      //         redirect(base_url() . 'index.php/Login/userlogin');  
      //     }


      // $cookie_name = "user";
      // $cookie_value = "Alex Porter";
      // setcookie($cookie_name, $cookie_value, time(60), "/");
      // if(!isset($_COOKIE[$cookie_name])) {
      //     echo "Cookie named '" . $cookie_name . "' is not set!";
      // } else {
      //     echo "Cookie '" . $cookie_name . "' is set!<br>";
      //     echo "Value is: " . $_COOKIE[$cookie_name];
      // }
=======
<?php  
    $base=$this->config->item('base_url');
    // echo "yes";
    // print_r($base);
    // exit; 
    
    $email=$this->session->userdata('email');
      if($email){
      
       
      }else{
        redirect(base_url() .'index.php/Login_CI/login');
      }

     // $cookie=$this->input->set_cookie('email',$email, 30);
      //if($session_data)
      // {
      
      //     $this->input->set_cookie('admin',$email,'60');
     
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
?>