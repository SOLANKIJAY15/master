<?php
//use CI\models;
class RegisterModel extends CI_Model
{
	// protected $table='student';
    // protected $primarykey='id';
    // protected $allowFields=['username','email','password'];
    // public function add_register()
    // {
    //     $formArray = array();

    //     $formArray = array(
    //         "username" => $this->input->post('username'),
    //         "email" => $this->input->post('email'),
    //         "mobile" => $this->input->post('mobile'),
    //     );
    //     // $formArray['username']=$this->input->post('username');
    //     // $formArray['email']=$this->input->post('email');
    //     // $formArray['mobile']=$this->input->post('mobile');
    //     // // $this->load->library('database');
    //     // // echo "form aRAAY <pre>";
    //     // // print_r($formArray);
    //     // // exit;
    //     $this->db->insert("user1",$formArray);
    // }

    public function add_register()
    {
        
        $formArray = array();

      
             //$type=$_POST[""];
            $formArray  = array(


                "type" => $this->input->post("type"),
                "first_name" => $this->input->post('first_name'),
                "last_name" => $this->input->post('last_name'),
                "email" => $this->input->post('email'),
                "password" => $this->input->post('password'),
                "conform_password" =>$this->input->post('conform_password'),
                "image" =>$this->input->post('image'),
                "con_id"=>$this->input->post('con_id'),
                "phone_no" =>$this->input->post('phone_no'),
                "street_address" =>$this->input->post('street_address'),
                "pincode" =>$this->input->post('pin_code'), 

            );
         
            // echo "form aRAAY <pre>";
            // print_r($formArray);
            // exit;
            $this->db->insert("user",$formArray);
      
    }

              public function country(){
            
                    $this->db->where('status',1);
                    return $country= $this->db->get('country')->result_array();
            
                }
                public function state(){
            
                    $this->db->where('status',2);
                    return $state= $this->db->get('country')->result_array();
            
                }
                public function city(){
            
                    $this->db->where('status',3);
                    return $city= $this->db->get('country')->result_array();
            
                }
        // $this->db->where('con_id',$Id);
        // return $city = $this->db->get('country')->row_array(); 

}
?>