<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_CI extends CI_Controller {

        // public function brand(){
        //     $this->load->view('add_brand');
        // }

        public function viewbrand(){
         
          
            $this->load->model('Brand_model');
          

            
            // echo "tables dtaa";
            // print_r($_POST);
            // exit;
            $brand = $this->Brand_model->all();
            $data = array();
            $data['brand'] = $brand;
            $this->load->view('view_brand',$data);
        }

        public function create(){

          $this->load->model('Brand_model');
          $this->form_validation->set_rules('brand_name','brand_name','required');
        
          if($this->form_validation->run() == false){
               $this->load->view('add_brand');
          } else {
              $formArray = array();
              $formArray['brand_name'] = $this->input->post('brand_name');
              $this->Brand_model->create($formArray); 
             redirect(base_url().'index.php/Brand_CI/viewbrand'); 
            }  
    
      }

//     public function create()
// 	{ 
// 	   $this->load->library('form_validation');

// 	   $this->form_validation->set_rules('brand_name','brand_name','required');
//         if($this->form_validation->run() === TRUE)
// 	   {
// 			if(isset($_POST['save'])){ 
				
// 				$this->Brand_model->create($_POST);
// 				$this->session->set_flashdata('sucess','yes');
// 				redirect(base_url().'index.php/Brand_CI/viewbrand');
// 				alert("data  inserted");
// 			}
// 			else{
// 			echo "no yes";
			
// 			}
// 		}
// 		else{
//             $this->load->view('add_brand');
// 		}
//    }   
   
   
}
          


      
