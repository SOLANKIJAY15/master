<<<<<<< HEAD
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
=======
<?php
class LoginModel extends CI_model{

    // function create($formArray)
    // {
    //     $this->db->insert('car_models',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
    // }

   
    public function can_login($email,$password)
    {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        
        $query = $this->db->get('user');
        //SELECT * FROM  USER WHERE EAIL = $EMAIL AND PASSWORD =$PASSWORD

        if($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }

    }

}
?>
>>>>>>> 8cb064f4becf3bc27d67855a2cad46039e135e98
