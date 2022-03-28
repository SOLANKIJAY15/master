<?php  
 class LoginModel extends CI_Model  
 {  
      public function can_login($email, $password)  
      {  
        
           $this->db->where('email', $email);  
           $this->db->where('password', $password);  
           $query = $this->db->get('user');  
        

           //SELECT * FROM users WHERE email = '$email' AND password = '$password'  
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
