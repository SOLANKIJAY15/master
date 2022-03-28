<?php
class User_model extends CI_model{
    // function create($formArray)
    // {
    //     $this->db->insert('car_models',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
    // }

    public function all(){
        return $user= $this->db->get('user')->result_array(); //SELECT *FORM users;
       
    }
    
    // public function getUser($Id){
    //     $this->db->where('id',$Id);
    //     return $cars = $this->db->get('car_models')->row_array(); // select * from users where user_id = ?
    // }

    // public function updateCars($Id,$formArray){
    //     $this->db->where('id',$Id);
    //     $this->db->update('car_models',$formArray); //update users SET name = ? , email = ? where user_id = ? 
        
    // }

    // public function deleteCars($Id){
    //     $this->db->where('id',$Id);
    //     $this->db->delete('car_models'); // DELETE FROM users Where user_id = ?
    // }



}
?>