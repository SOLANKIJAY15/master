<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_CI extends CI_Controller {

        // public function category(){
        //     $this->load->view('add_category');
        // }

        public function viewcategory(){
           
            $this->load->model('Category_model');
            $category = $this->Category_model->all();
            $data = array();
            $data['category'] = $category;
            $this->load->view('view_category',$data);
        }


        public function create(){
          $this->load->model('Category_model');
          $this->form_validation->set_rules('cat_name','cat_name','required');
        
          if($this->form_validation->run() == false){
              
               $this->load->view('add_category');
          } else {
              $formArray = array();
              $formArray['cat_name'] = $this->input->post('cat_name');
              $this->Category_model->create($formArray); 
            redirect(base_url().'index.php/Category_CI/viewcategory'); 
            }  
    
      }


      public function editCategory($Id){
        $this->load->model('Category_model');
        $category = $this->Category_model->getCategory($Id);
        $data = array();
        $data['category'] = $category;

        $this->form_validation->set_rules('cat_name','cat_name','required');

        if($this->form_validation->run()== false){

            $this->load->view('edit_category',$data);
        }else {
            //update cars record
            $formArray = array();
            $formArray['cat_name'] = $this->input->post('cat_name');
            $this->Category_model->updateCategory($Id,$formArray);
            $this->session->set_flashdata('success','Record updated successfully');
            redirect(base_url().'index.php/Category_CI/viewcategory');
        }
    }


      public function deleteCategory($Id){
        $this->load->model('Category_model');
        $category = $this->Category_model->getCategory($Id);
        if(empty($category)){
            $this->session->set_flashdata('failure','Record not found in database');
            redirect(base_url().'index.php/Category_CI/viewcategory');
        }

        $this->Category_model->deleteCategory($Id);
        $this->session->set_flashdata('success','Record deleted successfully');
        redirect(base_url().'index.php/Category_CI/viewcategory');
        }

    }

