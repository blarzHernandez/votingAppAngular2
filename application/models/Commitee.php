<?php

/*
 * Candidate model
 */
class Commitee extends CI_Model{

    //Construct
    public function __construct() {
        parent::__construct();
         $this->load->database();//load database 
    }

    //get candidate
     public function getCommitee($commitee){
            try {

                $sql=  $this->db->query("select * from commitee where commitee='".$commitee."' ");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                
                }else{
                    $count=  $sql->num_rows();

                    if($count >0){
                       return $sql->result_array();
                         
                    }
                }
                    
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }

            return NULL;


        }//end function

//Get all commitee per country
        public function getAllCommitee($country){
            try {

                $sql=  $this->db->query("select * from commitee where country='".$country."' ");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                
                }else{
                    $count=  $sql->num_rows();

                    if($count >0){
                       return $sql->result_array();
                         
                    }
                }
                    
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }

            return NULL;


        }//end function





}
?>
