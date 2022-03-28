<?php
class Category_model extends CI_model{
    function create($formArray)
    {
       
        $this->db->insert('category',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
    }

    public function all(){

        // echo "hyyy<pre>";
        //     print_r($formArray);
        //     exit;
        return $category= $this->db->get('category')->result_array(); //SELECT *FORM users;
       
    }
    
    public function getCategory($Id){
        $this->db->where('cat_id',$Id);
        return $category = $this->db->get('category')->row_array(); // select * from users where user_id = ?
    }

    public function updateCategory($Id,$formArray){
        $this->db->where('cat_id',$Id);
        $this->db->update('category',$formArray); //update users SET name = ? , email = ? where user_id = ? 
        
    }

    public function deleteCategory($Id){
        $this->db->where('cat_id',$Id);
        $this->db->delete('category'); // DELETE FROM users Where user_id = ?
    }

}
?>