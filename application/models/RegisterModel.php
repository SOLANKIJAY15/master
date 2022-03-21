<?php
//use CI\models;
class RegisterModel extends CI_Model
{
	// protected $table='student';
    // protected $primarykey='id';
    // protected $allowFields=['username','email','password'];
    public function add_register()
    {
        $formArray = array();

        $formArray = array(
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
            "mobile" => $this->input->post('mobile'),
        );
        $this->db->insert("user1",$formArray);
    }

   

}
?>