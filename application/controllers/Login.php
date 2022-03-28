<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('cookie', 'url')); 
	}

	// public function userlogin()
	// {
	// 	$this->load->view('login.php');
	// }
		
		//functions  
		//  function login()  
		 public function userlogin()  
		 {  
			  //http://localhost/tutorial/codeigniter/main/login  
			  
			  $data['email'] = 'CodeIgniter Simple Login Form With Sessions';  
			  $this->load->view("login", $data);  
		 }  
	 
		public function login_validation()  
		 {  
			  $this->load->library('form_validation');  
			  $this->load->library('session');  
			  $this->form_validation->set_rules('email', 'Email', 'required');  
			  $this->form_validation->set_rules('password', 'Password', 'required');  
			  if($this->form_validation->run())  
			  {  
				   //true  
				   $email = $this->input->post('email');  
				   $password = $this->input->post('password');  
				   //model function  
				   $this->load->model('LoginModel');  
				   if($this->LoginModel->can_login($email, $password))  
				   {  
<<<<<<< HEAD
					   	$session_data = array('email' => $email);  	$this->session->sess_expiration='3600';
						$this->session->set_userdata($session_data);  
						
=======
					   	$session_data = array('email' => $email);  	 
						$this->session->set_userdata($session_data);  
						// $cookie_name = "user";
						// $cookie_value = "Alex Porter";
						setcookie($email, $password, time(60), "/");
						if(!isset($_COOKIE[$email])) {
							echo "Cookie named '" . $email . "' is not set!";
						} else {
							echo "Cookie '" . $email . "' is set!<br>";
							echo "Value is: " . $_COOKIE[$email];
						}
>>>>>>> 5ebded95556cfd8486d2dc5fc8a15990c5a3c384
						redirect(base_url() . 'index.php/Login/enter'); 
								
				   }     
				   else  
				   {  
						$this->session->set_flashdata('error', 'Invalid email and Password');  
						redirect(base_url() . 'index.php/Login/userlogin');  
				   }  
			  }  
			  else  
			  {  
				   //false  
				   
				   $this->userlogin();  
			  }  
		 }  
		 public function enter(){  
			  if($this->session->userdata('email') != '')  
			  {  	 
				//    echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';  
				//    echo '<label><a href="'.base_url() . 'index.php/Login/logout">Logout</a></label>'; 
					
					redirect(base_url() . 'index.php/Dashboard/index');
			  }  
			  else  
			  {  	
				
				   redirect(base_url() . 'index.php/Login/userlogin');  
			  }  
		 }  
			public function logout()  
			{  
				
				$this->session->unset_userdata('email');  
			 
				redirect(base_url() . 'index.php/Login/userlogin');  
			} 
		
				// public function cookie() { 
				// 	set_cookie('Himanshu','user','-60'); 
				// 	$this->load->view('Cookie_view'); 
				//  } 			 
}
?>