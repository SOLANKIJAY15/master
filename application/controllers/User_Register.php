
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Register extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		
       $this->load->library('form_validation');
		$this->load->model('RegisterModel'); 
 
	}
	public function register(){
		// echo "gjhujg";
        // print_r($_POST);
        // exit;
		// $this->load->model('RegisterModel');
		// $city = $this->RegisterModel->country();
		// $con = array();
		// $con['country'] = $country;
		// $this->load->view('register',$con);
		$this->load->model('RegisterModel');
		$country= $this->RegisterModel->country();
		$state = $this->RegisterModel->state();
		$city = $this->RegisterModel->city();
		$data = array();
	
		$data['country'] = $country;
		$data['state'] = $state;
		$data['city'] = $city;

		$this->load->view('register',$data);
	}
	
	// //  public function country(){
	// // 	/* echo "gjhujg";
    // //     print_r($_POST);
    // //     exit; */
	// // 	$this->load->model('RegisterModel');
	// // 	$city = $this->RegisterModel->country();
	// // 	$con = array();
	// // 	$con['country'] = $country;
	// // 	$this->load->view('register',$con);
	// }

	// public function state(){
	// 	$this->load->model('RegisterModel');
	// 	$city = $this->RegisterModel->state();
	// 	$data = array();
	// 	$data['state'] = $state;
	// 	$this->load->view('register',$data);
	// }

	// public function city(){
	// 	$this->load->model('RegisterModel');
	// 	$city = $this->RegisterModel->city();
	// 	$data = array();
	// 	$data['city'] = $city;
	// 	$this->load->view('register',$data);
	// }
	
	

	public function register1()
	{
		$this->load->view('register1.php');
	}

	
	public function add_register()
	{ 
		//   print_r($_POST);
        //     exit;
        
		// echo "inn <pre>";    print_r($_POST);
		// exit;
		//  WITHOUT FORM VALIDATION
			
		
       //echo "inn";






	   $this->load->library('form_validation');

	   $this->form_validation->set_rules('first_name','First name','required');
	   $this->form_validation->set_rules('last_name','Last name','required');
	   $this->form_validation->set_rules('email','Email','required|valid_email');
	   $this->form_validation->set_rules('password','Password','required|matches[conform_password]');	
	   $this->form_validation->set_rules('conform_password','Conform password','required|matches[password]');
	   $this->form_validation->set_rules('image','Image','required');
	   $this->form_validation->set_rules('con_id','con_id','required');
	   $this->form_validation->set_rules('phone_no','Phone_no','required');
	   $this->form_validation->set_rules('street_address','Street_address','required');
	   $this->form_validation->set_rules('pin_code','Pincode','required');

	   if($this->form_validation->run() === TRUE)
	   {
			if(isset($_POST)){ 
			// 	  print_r($_POST);
            // exit;
				$this->RegisterModel->add_register($_POST);
				$this->session->set_flashdata('sucess','yes');
				redirect(base_url().'index.php/Dashboard/index');
				alert("data  inserted");
			}
			else{
			

				echo "no yes<pre>";
          
			
			
			}
		}
		else{
			// echo "no";
			$this->load->view('register.php');
		}
		
	
	}


}
?>