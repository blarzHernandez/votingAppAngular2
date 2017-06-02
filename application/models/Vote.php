<?php

/*
 * Candidate model
 */
class Vote extends CI_Model{

    //Construct
    public function __construct() {
        parent::__construct();
         $this->load->database();//load database 
    }

    //insert vote
     public function vote($data){
           try {
                $id_candidate = $data['id_candidate'];
                $user=$data['user'];               
               // $commitee=$data['commitee'];
                
                $sql=  $this->db->query("insert into  user voting values('".$id_candidate."','".$user."','".$commitee."',date())");

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




        }//end function

}
?>
