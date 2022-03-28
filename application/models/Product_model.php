<?php
class Product_model extends CI_model{
    function create($formArray)
    {
    
        $this->db->insert('product_details',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
    }

    public function all(){
        $this->db->select('pro_details_id,pro_name,image,discription,RAM,memory,stock,price');
        $this->db->from('product_details');
        $this->db->join('product', 'product_details.pro_id = product.pro_id');
        return $product  = $this->db->get()->result_array();

        // return $product= $this->db->get('product_details')->result_array(); //SELECT *FORM users;
       
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