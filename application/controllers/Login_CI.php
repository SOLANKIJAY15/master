<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_CI extends CI_Controller {


            function __construct(){
                parent::__construct();
                $this->load->database();
            }


         public function login(){
            $data['title'] ="Simple Login in Mobile Shopping";
            $this->load->view('login',$data);
        }

        public function login_validation()
        {
            $this->load->helper('cookie');
            $this->load->library('session');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');

            if($this->form_validation->run())
            {
                //true
                $email=$this->input->post('email');
                $password=$this->input->post('password');
            
                // echo "hi";
                // print_r($_POST);
                // exit;
                $this->load->model('LoginModel');

               
                 
               

                    if($this->LoginModel->can_login($email,$password))
                    {
                        $session_data =array(
                            'email' => $email
                        );

                    
                       
                        $this->session->sess_expiration = '3600';
                        $this->session->set_userdata($session_data);
                        redirect(base_url() . 'index.php/Login_CI/enter');
                    }
                    else{
                            $this->session->set_flashdata('error','Invalid Email');
                            redirect(base_url() .'index.php/Login_CI/login');
                    }

                
                
            }
            else{
                //false
                 // echo "hi";
                // print_r($_POST);
                // exit;
                $this->login();
            }
        }

         function enter()
        {
            if($this->session->userdata('email') != ''){
                // echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';
                // echo '<lable><a href="'.base_url().'index.php/Login_CI/logout">Log Out</a></label>';
                redirect(base_url().'index.php/welcome/dash');

            }
            else{
                redirect(base_url().'index.php/Login_CI/login');
            }
        }
         function logout()
        {
            delete_cookie($eamil);
            $this->session->unset_userdata('email');
            redirect(base_url() .'index.php/Login_CI/login');
        }


}
