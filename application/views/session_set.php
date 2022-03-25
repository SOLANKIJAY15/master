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

      $cookie = $this->input->set_cookie('Roys','admin', '60');
      if($cookie){
        
            //  $data = array( 'message' => 'cookie successfully set');
             redirect(base_url() . 'index.php/Dashboard/index');
          }
          else{
              // $data = array( 'message' => 'Something went wrong while creating cookie');
              redirect(base_url() . 'index.php/Login/userlogin');  
          }

?>