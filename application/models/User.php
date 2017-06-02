<?php

/*
 * User model
 */
class User extends CI_Model{

    //Construct
    public function __construct() {
        parent::__construct();
         $this->load->database();//load database segun archivo config.
        
    }

    //get name
     public function getUserName($user){
            try {

                $sql=  $this->db->query("select names from user where username='".$user."' ");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                
                }else{
                    $count=  $sql->num_rows();

                    if($count >= 1){
                        $data = $sql->result_array();
                        return $data[0]['names'];
                    }
                }
                    
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }

            return NULL;


        }//end function


 //get country of user
     public function getCountry($user){
            try {

                $sql=  $this->db->query("select country from user where username='".$user."' ");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                
                }else{
                    $count=  $sql->num_rows();

                    if($count >= 1){
                        $data = $sql->result_array();
                        return $data[0]['country'];
                    }
                }
                    
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }

            return NULL;


        }//end function

        //get commitee 
     public function getCommitte($user){
            try {

                $sql=  $this->db->query("select commitee from user where username='".$user."' ");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                
                }else{
                    $count=  $sql->num_rows();

                    if($count >= 1){
                        $data = $sql->result_array();
                        return $data[0]['commitee'];
                    }
                }
                    
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }

            return NULL;


        }//end function

    //Logueo usuario
        public function login($user,$pass)
        {
            

            $respuesta= FALSE;
            try {

                $sql=  $this->db->query("select * from user where username='".$user."'  and password='".$pass."'");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                    return FALSE;
                }else{
                   // var_dump(count($sql));
                    $count=  $sql->num_rows();
  
                    if($count == 1)//
                    {
                      
                        $respuesta= TRUE;
                    }
                    else
                    {
                       $respuesta= FALSE;//Invalid
                    }
                }
            } catch (Exception $exc) {
                $respuesta= $exc->getMessage();
            }

            return $respuesta;


        }//end function

public function insert($data){
    try {
$username = $data['username'];
$pass=$data['password'];
$names= $data['names'];
$surnames=$data['surnames'];
$country=$data['country'];
$email = $data['email'];

                $sql=  $this->db->query("insert into  user values('".$username."','".$pass."','".$names."','".$surnames."','".$email."','".$country."')");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                    return FALSE;
                }else{
                   return TRUE;
                }
            } catch (Exception $exc) {
                $respuesta= $exc->getMessage();
            }
            return FALSE;

}



}
?>
