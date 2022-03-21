
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
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function register()
	{
		$this->load->view('register.php');
	}
	public function register1()
	{
		$this->load->view('register1.php');
	}
	public function add_register()
	{
		

		//load registration view form
		
		// echo "inn";    print_r($_POST);
        //     exit;
        
		// echo "inn <pre>";    print_r($_POST);
		// exit;
		//  WITHOUT FORM VALIDATION
			
		
       //echo "inn";
	   $this->load->library('form_validation');

	   $this->form_validation->set_rules('first_name','First name','required');
	   $this->form_validation->set_rules('last_name','Last name','required');
	   $this->form_validation->set_rules('email','Email','required|valid_email');
	   $this->form_validation->set_rules('password','Password','required');	
	   $this->form_validation->set_rules('conform_password','Conform password','required');
	   $this->form_validation->set_rules('image','Image','required');
	   $this->form_validation->set_rules('phone_no','Phone_no','required');
	   $this->form_validation->set_rules('street_address','Street_address','required');
	   $this->form_validation->set_rules('pin_code','Pincode','required');

	   if($this->form_validation->run() === TRUE)
	   {
			if(isset($_POST['save'])){ 	
					
				$this->RegisterModel->add_register($_POST);
				$this->session->set_flashdata('sucess','yes');
				redirect(base_url().'index.php/Dashboard/index');
				alert("data  inserted");
			}
			else{
			echo "no yes";
			
			}
		}
		else{
			// echo "no";
			$this->load->view('register.php');
		}
		
	
	}


}
?>