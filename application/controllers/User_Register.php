
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Register extends CI_Controller 
{
	
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
		$this->load->model('RegisterModel');

		//load registration view form
		
		// echo "inn";    print_r($_POST);
        //     exit;
        
		// echo "inn";    print_r($_POST);
		// exit;
		//  WITHOUT FORM VALIDATION
        if(isset($_POST['save'])){ 	
            $formArray=array();
            $this->RegisterModel->add_register($_POST);
            $this->session->set_flashdata('sucess','yes');
            redirect(base_url().'index.php/Dashboard/index');
		}
		else{
			
		}
	
	}


}
?>