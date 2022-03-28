<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('index.php');
	}
	public function db()
	{
		//load the database  
		$conn=$this->load->database();
		// if($conn)
		// {
		// 	echo "yes";

		// }
		// else
		// {
		// 	echo "no";
		// }
	}
	
	
}


