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
			  
			  $data['first_name'] = 'CodeIgniter Simple Login Form With Sessions';  
			  $this->load->view("login", $data);  
		 }  
	 
		public function login_validation()  
		 {  
			  $this->load->library('form_validation');  
			  $this->load->library('session');  
			  $this->form_validation->set_rules('first_name', 'First Name', 'required');  
			  $this->form_validation->set_rules('password', 'Password', 'required');  
			  if($this->form_validation->run())  
			  {  
				   //true  
				   $username = $this->input->post('first_name');  
				   $password = $this->input->post('password');  
				   //model function  
				   $this->load->model('LoginModel');  
				   if($this->LoginModel->can_login($username, $password))  
				   {  
					   	$session_data = array('first_name' => $username);  	 
						$this->session->set_userdata($session_data);  
						redirect(base_url() . 'index.php/Login/enter'); 
						
								
				   }     
				   else  
				   {  
						$this->session->set_flashdata('error', 'Invalid Username and Password');  
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
			  if($this->session->userdata('first_name') != '')  
			  {  	 
				//    echo '<h2>Welcome - '.$this->session->userdata('first_name').'</h2>';  
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
				
				$this->session->unset_userdata('first_name');  
			 
				redirect(base_url() . 'index.php/Login/userlogin');  
			} 
		
				// public function cookie() { 
				// 	set_cookie('Himanshu','user','-60'); 
				// 	$this->load->view('Cookie_view'); 
				//  } 			 
}
?>