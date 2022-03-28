<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_CI extends CI_Controller {

        public function order(){
            $this->load->model('Order_model');
            $order = $this->Order_model->all();
            $data = array();
            $data['order'] = $order;
            $this->load->view('view_order',$data);
        }
}
