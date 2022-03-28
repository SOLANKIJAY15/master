<?php 
    // $this->load->database();
		// $this->load->helper(array('cookie', 'url')); 
    // $this->load->library('form_validation');  
    // $this->load->library('session');

    $base=$this->config->item('base_url');
    $username=$this->session->userdata('first_name');
      if($username){
       
      }
      else{
       redirect(base_url() .'index.php/Login/userlogin');
       }

      // $cookie = $this->input->set_cookie('xyz','$username', '60');
      // if($cookie){
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
?>