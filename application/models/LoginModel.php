<?php  
 class LoginModel extends CI_Model  
 {  
      public function can_login($username, $password)  
      {  
        
           $this->db->where('first_name', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('user');  
        

           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  

                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
 }  
