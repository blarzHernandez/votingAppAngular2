<?php

/*
 * Candidate model
 */
class Candidate extends CI_Model{

    //Construct
    public function __construct() {
        parent::__construct();
         $this->load->database();//load database 
    }

    //get candidate
     public function getCandidate($candidate){
            try {

                $sql=  $this->db->query("select names from canditates where id_candidate='".$candidate."' ");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                
                }else{
                    $count=  $sql->num_rows();

                    if($count >= 1){
                       return $sql->result_array();
                         
                    }
                }
                    
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }

            return NULL;


        }//end function

//Get all candidates
        public function getAllCandidate($userCountry){
            try {

                $sql=  $this->db->query("select * from candidate ");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                
                }else{
                    $count=  $sql->num_rows();

                    if($count >= 1){
                       return $sql->result_array();
                         
                    }
                }
                    
                
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }

            return NULL;


        }//end function


        //Get all candidates per country and commitee
        public function getAllCandidatePerCountry($country){
            try {

                $sql=  $this->db->query("select * from candidate where country='".$country."' ");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                
                }else{
                    $count=  $sql->num_rows();

                    if($count  > 0){
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
