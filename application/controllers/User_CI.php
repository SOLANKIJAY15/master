<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_CI extends CI_Controller {

        public function user(){
            $this->load->view('add_user');
        }
        public function viewuser(){
            $this->load->model('User_model');
            $order = $this->User_model->all();
            $data = array();
           // $data['user'] = $user;
            $this->load->view('view_user',$data);
        }
}
