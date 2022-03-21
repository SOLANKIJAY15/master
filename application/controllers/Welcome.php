<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function basic_forms()
	{
		$this->load->view('basic_forms');
	}

	public function dash()
	{
		$this->load->view('index');
	}

	public function basic_tables()
	{
		$this->load->view('basic_tables');
	}

	public function login()
	{
		$this->load->view('login');
	}
	public function product()
	{
		$this->load->view('product');
	}
	
	public function category()
	{
		$this->load->view('category');
	}
	public function brand()
	{
		$this->load->view('brand');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function viewproduct()
	{
		$this->load->view('view_product');
	}
}
